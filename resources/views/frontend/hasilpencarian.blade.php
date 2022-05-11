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
    @forelse ($buku as $key => $item)
      <div class="col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            @if (empty($item->cover))
              <img src="{{ asset('img/no-image.jpg') }}" width="230px">
            @else
              <img src="{{ asset('img/cover/'.$item->cover) }}" width="215px">
            @endif
            <h4 class="mt-2">{{$item->judul}}</h4>

            <p class="card-text">
              @foreach ($penulis as $itemp)
                  @if ($itemp->id === $item->penulis_id)
                    {{ $itemp->nama }}
                  @endif
              @endforeach
              - {{ $item->tahun }}
            </p>
            <a href="/detailbuku/{{$item->id}}" class="btn btn-info btn-sm btn-block">Detail Book</a>
          </div>
        </div><!-- /.card -->
      </div>
      @empty
      <div class="col-12 mt-3">
          <div class="info-box-content">
            <h5><i class="fas fa-exclamation-triangle"></i> Judul tidak ditemukan</h5>
          </div>
          <!-- /.info-box-content -->
      </div>
    @endforelse
  </div><!-- /.container-fluid -->
@endsection