@extends('mapel.template')

@section('title')
Tambah Data
@endsection

@section('content')
<form action="{{route('save.mapel')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Nama Pelajaran</label>
        <input type="text" name="nama_pelajaran" value="{{old('nama_pelajaran')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama_pelajaran')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="{{old('nama_dosen')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama_dosen')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{old('kelas')}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('kelas')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jam</label>
        <input type="time" name="jam" value="{{old('jam')}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('jam')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Modul</label>
        <input type="file" name="modul" value="{{old('modul')}}"  class="p-2 border rounded-md">
        <span>{{$errors->first('modul')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection



