@extends('backend.layout.master')

@section('judul')
Form Create Anggota
@endsection
    
@section('content')
    <form action="/anggota" method="POST">
        @csrf
        <!-- Nama -->
        <div class="form-group">
            <label for="exampleInputEmail">Nama Anggota</label>
            <input type="text" name="nama" class="form-control">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group">
            <label for="exampleInputEmail">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option value="P">Perempuan</option>
                <option value="L">Laki-Laki</option>
            </select>
            @error('jeniskelamin')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal Lahir-->
        <div class="form-group">
            <label for="exampleInputEmail">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" class="form-control">
            @error('tanggallahir')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Telp -->
        <div class="form-group">
            <label for="exampleInputEmail">No. Telepon</label>
            <input type="number" name="telp" class="form-control">
            @error('telp')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Alamat -->
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" cols="30" rows="5"></textarea>
            @error('alamat')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/anggota" class="btn btn-danger">Cancel</a>
    </form>
@endsection
