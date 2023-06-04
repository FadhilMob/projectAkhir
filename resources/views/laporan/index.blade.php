@extends('sb-admin.index')

@section('title')
    | LAPORAN
@endsection
@section('content')
<h1>LAPORAN </h1>
    <div class="card">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">JUDUL KEGIATAN</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Judul"></br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">DASAR HUKUM</label>
                        {{-- dropdown typekamar --}}
                        <div class="drop-down">
                            <div class="btn-group">
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id">NOMOR TUGAS</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Nomor Tugas"></br>
                    </div>
                    <div class="form-group">
                        <label for="id">WAKTU PELAKSANAAN</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Waktu Pelaksanaan"></br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">TANGGAL</label>
                        {{-- dropdown typekamar --}}
                        <div class="drop-down">
                            <div class="btn-group">
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id">PUKUL</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Pukul"></br>
                    </div>
                    <div class="form-group">
                        <label for="id">TEMPAT DAN PESERTA</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Tempat dan peserta"></br>
                    </div>
                    <div class="form-group">
                        <label for="id">TUJUAN</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Tujuan"></br>
                    </div>
                    <div class="form-group">
                        <label for="id">IDENTIFIKASI MASALAH</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan Identifikasi "></br>
                    </div>
            </form>
        </div>
    </div>
@endsection