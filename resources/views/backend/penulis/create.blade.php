@extends('backend.layout.master')

@section('judul')
Form Create Penulis
@endsection

@section('content')        
    <form action="/penulis" method="post">
        @csrf

        <div class="form-group">
            <label class="col-form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Penulis" name="nama">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/buku" class="btn btn-danger">Cancel</a>
    </form>
@endsection
