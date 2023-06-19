@extends('sb-admin.index')

@section('title')
    EDIT | LAPORAN
@endsection

@section('content')
<h1>EDIT LAPORAN </h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('laporan.update', $laporan->id) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="mb-3">
                    
                {{-- JUDUL --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type-"text class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $laporan->judul}}">
                    {{-- PESAN ERROR --}}
                    @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- LATAR BELAKANG --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Latar Belakang</label>
                    <input type-"text class="form-control @error('latar_belakang') is-invalid @enderror" name="latar_belakang" value="{{ $laporan->latar_belakang}}">
                    {{-- PESAN ERROR --}}
                    @error('latar_belakang')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- DASAR HUKUM --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Dasar Hukum</label>
                    <input type-"text class="form-control @error('dasar_hukum') is-invalid @enderror" name="dasar_hukum" value="{{ $laporan->dasar_hukum}}">
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
                    <input type-"text class="form-control @error('dasar_pelaksanaan') is-invalid @enderror" name="dasar_pelaksanaan" value="{{ $laporan->dasar_pelaksanaan}}">
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
                    <input type-"text class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ $laporan->hari}}">
                    {{-- PESAN ERROR --}}
                    @error('hari')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- PUKUL --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Pukul</label>
                    <input type-"text class="form-control @error('pukul') is-invalid @enderror" name="pukul" value="{{ $laporan->pukul}}">
                    {{-- PESAN ERROR --}}
                    @error('pukul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                  {{-- TEMPAT --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type-"text class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ $laporan->tempat}}">
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
                    <input type-"text class="form-control @error('peserta') is-invalid @enderror" name="peserta" value="{{ $laporan->peserta}}">
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
                    <input type-"text class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ $laporan->tujuan}}">
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
                    <input type-"text class="form-control @error('identifikasi_masalah') is-invalid @enderror" name="identifikasi_masalah" value="{{ $laporan->identifikasi_masalah}}">
                    {{-- PESAN ERROR --}}
                    @error('identifikasi_masalah')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>

                   {{-- Image --}}
                   <label for="exampleInputEmail1">Image</label>
                   <div class="col-md-12 mb-2">
                       <img id="preview-image-before-upload" width="150px" src="{{ url('/storage/laporan/'.$laporan->image) }}"
                       alt="preview image" style="max height: 200px;">
                   </div>

                   <div class="input-group mb-3">
                       <div class="custom-file">
                           <input type="file" class="form-control" id="image" name="image">
                       </div>
                   </div>

                {{-- TOMBOL TAMBAH --}}   
                <button type="submit" value="submit" name="add" class="btn btn-md btn-success mt-2">SAVE EDIT</button>
                {{-- TOMBOL BACK --}}
                <a href="{{ route('laporan.index') }}" class="btn btn-md btn-secondary mt-2">BACK
                    {{-- <span class="text">Tambah</span> --}}
                </a>
            </form>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
      
    $(document).ready(function (e) {
     
       
       $('#image').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
          $('#preview-image-before-upload').attr('src', e.target.result); 
          $('#preview-dokumen-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });
       
    });
     
</script>



{{-- https://cdnjs.com/libraries/trix/1.2.4 --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js"></script>
