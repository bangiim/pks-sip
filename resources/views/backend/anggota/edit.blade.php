@extends('backend.layout.master')

@section('judul')
    Form Edit Anggota
@endsection
    
@section('content')
    <form action="/anggota/{{$anggota->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail">Nama Anggota</label>
            <input type="text" name="nama" value="{{$anggota->nama}}" class="form-control">
        </div>
        @error('nama')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <!-- Jenis Kelamin -->
        <div class="form-group">
            <label for="exampleInputEmail">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin" value="{{$anggota->jeniskelamin}}" >                
                @if ($anggota->jeniskelamin === 'L')
                    <option value="L" selected>Laki-Laki</option>
                    <option value="P">Perempuan</option>
                @else
                    <option value="L">Laki-Laki</option>
                    <option value="P" selected>Perempuan</option>
                @endif
            </select>
        </div>
        @error('jeniskelamin')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" value="{{$anggota->tanggallahir}}" class="form-control">
        </div>
        @error('tanggallahir')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="text" name="email" value="{{$anggota->email}}" class="form-control">
        </div>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label>No Telepon</label>
            <input type="number" name="telp" value="{{$anggota->telp}}" class="form-control">
        </div>
        @error('telp')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" cols="30" rows="5">{{$anggota->alamat}}</textarea>
        </div>
        @error('alamat')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/anggota" class="btn btn-danger">Cancel</a>
    </form>
@endsection
