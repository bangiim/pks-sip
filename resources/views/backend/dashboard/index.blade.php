@extends('backend.layout.master')

@section('judul')
    Welcome to Dashboard
@endsection

@section('content')
  
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><i class="nav-icon fas fa-book"></i>&nbsp; {{ $buku }}</h3>

          <p>Buku</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-book"></i>
        </div>
        <a href="/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><i class="nav-icon fas fa-users"></i>&nbsp; {{ $anggota }}</h3>

          <p>Anggota</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-users"></i>
        </div>
        <a href="/anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><i class="nav-icon fas fa-user"></i>&nbsp; {{ $user }}</h3>

          <p>User Admin</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-user"></i>
        </div>
        <a href="/admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3><i class="nav-icon fas fa-book-open"></i>&nbsp; {{ $pinjam }}</h3></h3>

          <p>Peminjaman Buku</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/pinjam" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row (main row) -->
@endsection

@push('style')
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush


            