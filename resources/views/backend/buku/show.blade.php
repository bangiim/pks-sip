@extends('backend.layout.master')

@section('judul')
Detail Data buku
@endsection

@section('judulbox')
Detail Data buku : <b>{{$buku->judul}} ({{$buku->tahun}})</b>
@endsection

@section('content')
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th style="width: 20%">#</th>
          <td>{{$buku->id}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Cover</th>
          <td><img src="{{ asset('img/cover/'.$buku->cover) }}" width="15%"></td>
        </tr>
        <tr>  
          <th style="width: 20%">Judul buku</th>
          <td>{{$buku->judul}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Edisi</th>
          <td>{{$buku->edisi}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Tahun</th>
          <td>{{$buku->tahun}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Penerbit</th>
          <td>{{$buku->penerbit}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Penulis</th>
          <td>{{$buku->penulis->nama}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Kategori</th>
          <td>{{$buku->kategori->nama}}</td>
        </tr>
      </tbody>
    </table>

    <a href="/buku" class="btn btn-info mt-4">Back</a>
    <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning mt-4">Edit</a>
@endsection