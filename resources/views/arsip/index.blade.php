@extends('sb-admin.index')

@section('title')
    | DATA ARSIP
@endsection
@section('content')
<h2>DATA ARSIP</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            {{-- <a href="#" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah ARSIP</span>
            </a> --}}

            {{-- ALERT SUKSES --}}
            @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                 </div> 
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama RHK</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arsip as $arsip)
                            
                        
                        <tr>
                            <td>{{ $arsip->id }}</td>
                            <td>{{ $arsip->rhk->nama_rhk }}</td>  
                            <td>{{ $arsip->judul_kegiatan }}</td>
                            <td>{{ $arsip->tanggal }}</td>
                            <td align="center">
                                {{-- <div class="btn-group">
                                    <a href="" class="btn btn-primary mr-2">Edit</a>
                                    <a href="" class="btn btn-danger mr-2">Hapus</a>
                                    <a href="#" class="btn btn-info">Info</a>
                                </div>
                            </td> --}}

                                {{-- Tombol Delete --}}
                                <form action="#" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda Yakin Menghapus Data Ini?')">
                                <i class="bi bi-trash3"></i>
                                </button>
                                </form>
                               
                                
                                {{-- Tombol Edit --}}
                                <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                </a>
                                
                                {{-- Tombol Detail --}}
                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                <i class="bi bi-info-square"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
