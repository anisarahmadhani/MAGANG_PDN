@extends('template.navbar')

@section('title')
Halaman Dosen
@endsection

@section('content')
<div class="flex justify-between">
    <div class="text-xl font-bold">
        Data Dosen
    </div>
    <div>
        <a href="" class="bg-blue-300 hover:bg-blue-500 text-white p-2 border rounded-md">Tambah Data</a>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosen as $i => $a)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$a->nama_dosen}}</td>
            <td>{{$a->nip}}</td>
            <td>{{$a->tempat_lahir}}</td>
            <td>{{$a->tgl_lahir}}</td>
            <td>{{$a->alamat}}</td>
            <td><img src="{{asset('foto_dosen/'.$a->foto)}}" alt="" width="150px" height="150px"></td>
        </tr>
    </tbody>
</table>
@endsection