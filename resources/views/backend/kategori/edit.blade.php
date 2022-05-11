@extends('backend.layout.master')

@section('judul')
Form Edit Kategori
@endsection

@section('content')        
    <form action="/kategori/{{$kategori->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama kategori" name="nama" value="{{$kategori->nama}}">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/buku" class="btn btn-danger">Cancel</a>
    </form>
@endsection
