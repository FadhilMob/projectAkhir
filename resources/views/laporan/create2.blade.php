@extends('sb-admin.index')

@section('title')
    TAMBAH | LAPORAN
@endsection
@section('content')
<h1>TAMBAHKAN LAPORAN </h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    
                {{-- JUDUL --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type-"text class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul')}}">
                    {{-- PESAN ERROR --}}
                    @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                  {{-- LATAR BELAKANG --}}
                <div class="form-group">
                    <label>Latar Belakang</label>
                    <textarea id="latar_belakang" class="form-control @error('latar_belakang') is-invalid @enderror" rows="20" name="latar_belakang">{{old('latar_belakang')}}</textarea>
                    @error('latar_belakang')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                  {{-- DASAR HUKUM --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Dasar Hukum</label>
                    <input type-"text class="form-control @error('dasar_hukum') is-invalid @enderror" name="dasar_hukum" value="{{ old('dasar_hukum')}}">
                    {{-- PESAN ERROR --}}
                    @error('dasar_hukum')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- DASAR PELAKSANAAN --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Dasar Pelaksanaan</label>
                    <input type-"text class="form-control @error('dasar_pelaksanaan') is-invalid @enderror" name="dasar_pelaksanaan" value="{{ old('dasar_pelaksanaan')}}">
                    {{-- PESAN ERROR --}}
                    @error('dasar_pelaksanaan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- HARI --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                    <input type="date" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari')}}">
                    {{-- PESAN ERROR --}}
                    @error('hari')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- PUKUL --}}
                  <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="exampleInputEmail1">Mulai Pukul</label>
                    <input type="time" class="form-control @error('pukul') is-invalid @enderror" name="pukul" value="{{ old('pukul')}}">
                    {{-- PESAN ERROR --}}
                    @error('pukul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>
                {{-- <div class="form-group col-md-1">
                    <label for="exampleInputEmail1">Sampai Pukul</label>
                    <input type="time" class="form-control @error('pukul') is-invalid @enderror" name="pukul" value="{{ old('pukul')}}">
                    
                    @error('pukul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div> --}}
                  </div>

                  {{-- TEMPAT --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type-"text class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat')}}">
                    {{-- PESAN ERROR --}}
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- PESERTA --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Peserta</label>
                    <input type-"text class="form-control @error('peserta') is-invalid @enderror" name="peserta" value="{{ old('peserta')}}">
                    {{-- PESAN ERROR --}}
                    @error('peserta')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>
                 
                  {{-- TUJUAN --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                    <input type-"text class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ old('tujuan')}}">
                    {{-- PESAN ERROR --}}
                    @error('tujuan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- IDENTIFIKASI MASALAH --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Identifikasi Masalah</label>
                    <input type-"text class="form-control @error('identifikasi_masalah') is-invalid @enderror" name="identifikasi_masalah" value="{{ old('identifikasi_masalah')}}">
                    {{-- PESAN ERROR --}}
                    @error('identifikasi_masalah')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                {{-- Image --}}
                <label for="exampleInputEmail1">Image</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
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

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#latar_belakang').summernote();
        });
    </script>

    

