@extends('backend.layout.master')

@section('judul')
Detail Peminjaman Buku
@endsection

@section('content')
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th style="width: 20%">#</th>
          <td>{{$pinjam->id}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Nama Peminjam</th>
          <td>{{$pinjam->anggota->nama}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Judul Buku</th>
          <td>{{$pinjam->buku->judul}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Tanggal Pinjam</th>
          <td>{{$pinjam->tanggal_pinjam}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Tanggal Jatuh Tempo</th>
          <td>{{$pinjam->tanggal_jatuhtempo}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Tanggal Pengembalian</th>
          <td>{{$pinjam->tanggal_pengembalian}}</td>
        </tr>
      </tbody>
    </table>

    <a href="/pinjam" class="btn btn-info mt-4">Back</a>
    <a href="/pinjam/{{$pinjam->id}}/edit" class="btn btn-warning mt-4">Edit</a>
@endsection