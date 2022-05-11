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
    <div class="col-lg-12 mb-3">
      <div class="card">
        <div class="card-header">
          <h3>Detail Buku</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3">
              @if (empty($buku->cover))
                <img src="{{ asset('img/no-image.jpg') }}" width="230">
              @else
                <img src="{{ asset('img/cover/'.$buku->cover) }}" width="230">
              @endif
            </div>
            <div class="col-lg-9">
              <h2 class="mb-4 mt-2 font-weight-bold">{{$buku->judul}}</h2>
              <table class="table table-striped table-bordered">
                <tr>  
                  <th style="width: 20%">Penulis</th>
                  <td>{{ $buku->penulis->nama }}</td>
                </tr>
                <tr>
                  <th style="width: 20%">Penerbit</th>
                  <td>{{$buku->penerbit}}</td>
                </tr>
                <tr>  
                  <th style="width: 20%">Tahun</th>
                  <td>{{ $buku->tahun }}</td>
                </tr>
                <tr>  
                  <th style="width: 20%">Edisi</th>
                  <td>{{ $buku->edisi }}</td>
                </tr>
                <tr>  
                  <th>Kategori</th>
                  <td>{{ $buku->kategori->nama }}</td>
                </tr>
              </table>
            </div>
          </div> 
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success float-right" onclick="history.back()"><i class="fas fa-angle-double-left fa-fw"></i> Back</button>
        </div>
      </div><!-- /.card -->
    </div>
  </div><!-- /.container-fluid -->
@endsection