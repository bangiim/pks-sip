@extends('backend.layout.master')

@section('judul')
Form Peminjaman Buku
@endsection

@section('content')        
    <form action="/pinjam" method="post">
        @csrf
         <div class="form-group">
            <label class="col-form-label">Anggota</label>
            <select class="form-control select2bs4" name="anggota_id">
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggota as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('anggota_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Buku</label>
            <select class="form-control select2bs4" name="buku_id">
                <option value="">-- Pilih Buku --</option>
                @foreach ($buku as $item)
                    <option value="{{ $item->id }}">{{ $item->judul }}</option>
                @endforeach
            </select>
            @error('buku_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" placeholder="Tanggal Pinjam" name="tanggal_pinjam">
            @error('tanggal_pinjam')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" placeholder="Tanggal Jatuh Tempo" name="tanggal_jatuhtempo">
            @error('tanggal_jatuhtempo')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Tanggal Pengembalian</label>
            <input type="date" class="form-control" placeholder="Tanggal Pengembalian" name="tanggal_pengembalian">
            @error('tanggal_pengembalian')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/pinjam" class="btn btn-danger">Cancel</a>
    </form>
@endsection

@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

@push('script')
    <!-- Select2 -->
    <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
        });
    </script>
@endpush