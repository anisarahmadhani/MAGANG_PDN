<?php

namespace App\Http\Controllers\Mapel;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditMapelRequest;
use App\Http\Requests\InputMapelRequest;
use App\Models\Mapel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $data ['mapel'] = Mapel:: get();
        return view('mapel.index', $data);
    }

    public function tambah(){
        return view('mapel.tambah');
    }

    public function save(InputMapelRequest $r)
    {
        if ($r->validated()) {
            //cara upload file
            $modul = $r->modul->getClientOriginalName();
            $r->modul->move('modul/', $modul);

            Mapel::create([
                'nama_pelajaran' => $r->nama_pelajaran,
                'nama_dosen' => $r->nama_dosen,
                'kelas' => $r->kelas,
                'jam' => $r->jam,
                'modul' => $modul,
            ]);

            return redirect('mapel')->with('pesan', 'input data berhasil');
        }
    }

    public function edit($id){
        $data['mapel'] = Mapel::where('id',$id)->first();

        return view('mapel.edit', $data);
    }

    public function update(EditMapelRequest $r, $id){
        if($r->validated()){
            if($r->modul){
                //cek nama file sebelumnya
                $cek = Mapel::where('id',$id)->first();
                // jika sebelumnya ada maka jalankan perintah hapus
                if(File::exists(public_path('modul/'.$cek->modul))){
                    File::delete(public_path('modul/'. $cek->modul));
                }
                    //ambil nama file gambar
                    $modul = $r->modul->getClientOriginalName();
                    //memindahkan file gambar kedalam direktori public/modul
                    $r->modul->move('modul/', $modul);

                    $data['modul'] = $modul;
            }

            $data['nama_pelajaran'] = $r->nama_pelajaran;
            $data['nama_dosen'] = $r->nama_dosen;
            $data['kelas'] = $r->kelas;
            $data['jam'] = $r->jam;

            Mapel::where('id',$id)->update($data);

            return redirect('mapel');
            
        }
    }

    public function delete($id){
        Mapel::where('id',$id) -> delete();
        return back();
    }
}
