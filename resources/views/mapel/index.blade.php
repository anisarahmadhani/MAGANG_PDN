@extends('mapel.template')

@section('title')
Mata Pelajaran
@endsection

@section('content')
  <div class="flex justify-between">
    <div class="text-xl font-bold">Data Mata Pelajaran</div>
    <div>
        <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md"> Tambah Data</a>
    </div>
  </div>

  <table class="table w-full mt-5">
    <thead>
        <tr class="border p-3 bg-sky-500 text-white">
            <th class="border p-3">No</th>
            <th class="border p-3">Nama Pelajaran</th>
            <th class="border p-3">Dosen</th>
            <th class="border p-3">Kelas</th>
            <th class="border p-3">Jam</th>
            <th class="border p-3">Modul</th>
            <th class="border p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mapel as $i => $a)
            <tr>
                <td class="text-center border p-3">{{$i + 1}}</td>
                <td class="text-center border p-3">{{$a->nama_pelajaran}}</td>
                <td class="text-center border p-3">{{$a->nama_dosen}}</td>
                <td class="text-center border p-3">{{$a->kelas}}</td>
                <td class="text-center border p-3">{{$a->jam}}</td>
                <td class="text-center border p-3">{{$a->modul}}</td>
                <td class="text-center border p-3">
                  <a href="{{route('edit.mapel',$a->id)}}" class="bg-yellow-500 hover:bg-yellow-700 rounded-md text-white font-bold p-3"><i class="fa-solid fa-pen-to-square p-1"></i>Edit</a>
                  <a href="{{route('delete', $a->id)}}" class="bg-red-500 hover:bg-red-700 rounded-md text-white font-bold p-3"><i class="fa-solid fa-trash-can p-1"></i>Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

