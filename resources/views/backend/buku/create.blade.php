@extends('backend.layout.master')

@section('judul')
Form Create Buku
@endsection

@section('content')        
    <form action="/buku" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="col-form-label">Judul</label>
            <input type="text" class="form-control" placeholder="Judul buku" name="judul">
            @error('judul')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Edisi</label>
            <input type="text" class="form-control" placeholder="Edisi" name="edisi">
            @error('edisi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Penerbit</label>
            <input type="text" class="form-control" placeholder="Penerbit" name="penerbit">
            @error('penerbit')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Tahun</label>
            <input type="number" class="form-control" placeholder="Tahun" name="tahun">
            @error('tahun')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Penulis</label>
            <select class="form-control select2bs4" name="penulis_id">
                <option value="">-- Pilih Penulis --</option>
                @foreach ($penulis as $itemp)
                    <option value="{{ $itemp->id }}">{{ $itemp->nama }}</option>
                @endforeach
            </select>
            @error('penulis_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Kategori</label>
            <select class="form-control select2bs4" name="kategori_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategori as $itemk)
                    <option value="{{ $itemk->id }}">{{ $itemk->nama }}</option>
                @endforeach
            </select>
            @error('kategori_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Cover</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control custom-file-input" name="cover">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
            @error('cover')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/buku" class="btn btn-danger">Cancel</a>
    </form>
@endsection

@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

@push('script')
    <!-- bs-custom-file-input -->
    <script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();

            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
        });
    </script>
@endpush