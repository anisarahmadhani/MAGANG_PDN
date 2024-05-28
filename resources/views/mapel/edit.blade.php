@extends('mapel.template')

@section('title')
Edit Data
@endsection

@section('content')
<form action="{{route('update', $mapel->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Nama Pelajaran</label>
        <input type="text" name="nama_pelajaran" value="{{$mapel->nama_pelajaran}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama_pelajaran')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="{{$mapel->nama_dosen}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama_dosen')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{$mapel->kelas}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('kelas')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jam</label>
        <input type="time" name="jam" value="{{$mapel->jam}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('jam')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Modul</label>
        <input type="file" name="modul" value="{{$mapel->modul}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('modul')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Edit</button>
    </div>
</form>

@endsection



