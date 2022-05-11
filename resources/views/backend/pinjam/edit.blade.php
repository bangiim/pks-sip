@extends('backend.layout.master')

@section('judul')
Form Edit Peminjaman Buku
@endsection

@section('content')        
    <form action="/pinjam/{{ $pinjam->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="col-form-label">Anggota</label>
            <select class="form-control select2bs4" data-placeholder="-- Pilih Anggota --" name="anggota_id">
                @foreach ($anggota as $itemA)
                    @if ($itemA->id === $pinjam->anggota_id)
                        <option value="{{ $itemA->id }}" selected>{{ $itemA->nama }}</option>
                    @else
                        <option value="{{ $itemA->id }}">{{ $itemA->nama }}</option>
                    @endif
                @endforeach
            </select>
            @error('anggota_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Buku</label>
            <select class="form-control select2bs4" data-placeholder="-- Pilih Buku --" name="buku_id">
                @foreach ($buku as $itemB)
                    @if ($itemB->id === $pinjam->buku_id)
                        <option value="{{ $itemB->id }}" selected>{{ $itemB->judul }}</option>
                    @else
                        <option value="{{ $itemB->id }}">{{ $itemB->judul }}</option>
                    @endif
                @endforeach
            </select>
            @error('buku_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        @error('anggota_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label class="col-form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" placeholder="Tanggal Pinjam" name="tanggal_pinjam" value="{{ $pinjam->tanggal_pinjam }}">
            @error('tanggal_pinjam')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        @error('buku_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        
        <div class="form-group">
            <label class="col-form-label">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" placeholder="Tanggal Jatuh Tempo" name="tanggal_jatuhtempo" value="{{ $pinjam->tanggal_jatuhtempo }}">
            @error('tanggal_jatuhtempo')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        @error('tanggal_pinjam')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label class="col-form-label">Tanggal Pengembalian</label>
            <input type="date" class="form-control" placeholder="Tanggal Pengembalian" name="tanggal_pengembalian" value="{{ $pinjam->tanggal_pengembalian }}">
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