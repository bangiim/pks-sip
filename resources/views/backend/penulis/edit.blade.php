@extends('backend.layout.master')

@section('judul')
Form Edit Penulis
@endsection

@section('content')        
    <form action="/penulis/{{$penulis->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Penulis" name="nama" value="{{$penulis->nama}}">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/buku" class="btn btn-danger">Cancel</a>
    </form>
@endsection
