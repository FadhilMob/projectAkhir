@extends('sb-admin.index')

@section('title')
    | LAPORAN
@endsection
@section('content')
<h1>LAPORAN </h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('laporan.index') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    
                {{-- NAMA --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type-"text class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama')}}">
                    {{-- PESAN ERROR --}}
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- ALAMAT --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">ALAMAT</label>
                    <input type-"text class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat')}}">
                    {{-- PESAN ERROR --}}
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                {{-- TOMBOL TAMBAH --}}   
                <button type="submit" value="submit" name="add" class="btn btn-md btn-success mt-2">SAVE</button>
                {{-- TOMBOL BACK --}}
                <a href="/dashboard" class="btn btn-md btn-secondary mt-2">BACK
                    {{-- <span class="text">Tambah</span> --}}
                </a>
            </form>
        </div>
    </div>
@endsection