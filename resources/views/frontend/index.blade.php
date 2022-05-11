@extends('frontend.layout')

@section('content')
  <div class="row">
    <div class="col-sm-6">
      <h2 class="mb-3 mt-3"> OPAC : <small><i>Online Public Access Catalog</i></small></h2>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <!-- Start kode untuk form pencarian -->
          <form class="form" method="get" action="/search">
            <div class="input-group">
              <input class="form-control form-control-lg " type="search" placeholder="Search Judul Buku" aria-label="Search" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-info" type="submit">
                  <i class="fas fa-search fa-fw"></i>
                </button>
                <button class="btn btn-warning" type="button" onclick="location.href='/';">
                  <i class="fas fa-times fa-fw"></i>
                </button>
              </div>
            </div>
          </form>
          <!-- Start kode untuk form pencarian -->
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div id="carouselExampleIndicators" class="carousel slide  mt-4 mb-3" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/banner-1.png') }}" class="d-block w-100 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/banner-2.png') }}" class="d-block w-100 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/banner-3.png') }}" class="d-block w-100 rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection