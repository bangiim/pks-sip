@extends('backend.layout.master')

@section('judul')
Detail Data Anggota
@endsection

@section('judulbox')
Detail Data Anggota : <b>{{$anggota->nama}}</b>
@endsection

@section('content')
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th style="width: 20%">#</th>
          <td>{{$anggota->id}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">nama</th>
          <td>{{$anggota->nama}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Jenis Kelamin</th>
          <td>{{$anggota->jeniskelamin}}</td>
        </tr>
        <tr>  
          <th style="width: 20%">Tanggal Lahir</th>
          <td>{{$anggota->tanggallahir}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Alamat</th>
          <td>{{$anggota->alamat}}</td>
        </tr>
        <tr>
          <th style="width: 20%">Email</th>
          <td>{{$anggota->email}}</td>
        </tr>
        <tr>
          <th style="width: 20%">No HP/Telp.</th>
          <td>{{$anggota->telp}}</td>
        </tr>
      </tbody>
    </table>

    <a href="/anggota" class="btn btn-info mt-4">Back</a>
    <a href="/anggota/{{$anggota->id}}/edit" class="btn btn-warning mt-4">Edit</a>
@endsection