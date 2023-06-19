<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <style type="text/css">
        body
        {
            font-family: 'Bookman Old Style';
            /* TIDAK BISA, DOMPDF HANYA BEBERAPA FONT SAJA */
    
            .paragraph{
                font-size: 14px;
                /* font-family: 'Bookman Old Style'; */
                text-align: justify;
                text-justify: inter-word;
            }

            .jarak{
                line-height:2;
            }
    
            .font{
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div style="margin: 1,5cm 2cm 1,5cm 2cm">
    {{-- KOP SURAT --}}
    <table border="0" width = "703px">
        <tr>
            <td></td>
            <td width ="50"><img src="{{ ('asset/img/logo.jpeg') }}" width="80" height="80"></td>
            <td>
                <center>
                    <font size="4"><b>PEMERINTAH KOTA BATU</b></font><BR>
                    <font size="4"><b>DINAS LINGKUNGAN HIDUP</b></font><BR>
                    <font size="2">Balaikota Among Tani Pemerintah Kota Batu Gedung C Lantai 2</font><BR>
                    <font size="2">Jl. Panglima Sudirman 507  Telp. / Fax. 0341-513265</font><BR>
                    <font size="2">Kota Batu 65313</font><BR>
                </center>
            </td>
            <td width ="50"></td>
            <td></td>
        </tr>
    </table>

    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 43px;">

    {{-- // JUDUL --}}
    <div class="judul" class="paragraph">
        <center>
        <p style="margin: 2"><b>LAPORAN UNSUR PEMANTAUAN KUALITAS LINGKUNGAN SUB UNSUR</b>
            <br><b>PERENCANAAN PEMANTAUAN PERLINDUNGAN DAN PENGELOLAAN</b><br><b>LINGKUNGAN HIDUP – </b>
            <br><b>{{ $laporan->judul }}</b>
        </p>
        </center>
    </div>

    {{-- // I. LATAR BELAKANG (KOSONGKAN) --}}
    <div class="paragraph" class="jarak">
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>I.</b></td>
                <p style="margin: 0 0 0 0"><b>Latar Belakang</b></p>
            </tr>
        </table>
        <p style="margin: 0 17 5 63">{!!$laporan->latar_belakang!!}
        </p>
    </div>


    {{-- II. DASAR HUKUM --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b> II.</b></td>
                <p style="margin: 0 0 0 0"><b> Dasar Hukum</b></p>
            </tr>
        </table>
        <p style="margin: 0 17 5 63">{!! $laporan->dasar_hukum !!}
        </p>
        {{-- <p style="margin: 0 17 5 63">a. Undang-Undang Nomor 27 Tahun 2006 tentang Penataan Ruang;</p>
        <p style="margin: 0 17 5 63">b. Undang-Undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup </p>
        <p style="margin: 0 17 5 63">c. Peraturan Pemerintah Nomor 81 Tahun 2012 tentang Pengelolaan Sampah Rumah Tangga;</p>
        <p style="margin: 0 17 5 63">d. Peraturan Daerah Kota Batu Nomor 16 Tahun 2011 tentang Perlindungan, Pelestarian dan Pengelolaan Lingkungan Hidup;</p>
        <p style="margin: 0 17 5 63">e. Peraturan Wali Kota Batu Nomor 14 Tahun 2022 tentang Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup.</p>
        <p style="margin: 0 17 5 63"></p> --}}
    </div>

    {{-- III. DASAR PELAKSANAAN KEGIATAN --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>III.</b></td>
                <p style="margin: 0 0 0 0"><b>Dasar Pelaksanaan Kegiatan</b></p>
            </tr>
        </table>
        <p style="margin:  0 4 5 57">{{$laporan->dasar_pelaksanaan}}</p>
        {{-- <p style="margin: 0 17 5 63">094/385 /422.110/2023 Tanggal Maret 2023</p> --}}
    </div>

    {{-- IV. WAKTU --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>IV.</b></td>
                <p style="margin: 0 0 0 0"><b>Waktu Pelaksanaan</b></p>
            </tr>
        </table>
        <p style="margin:  0 4 5 57">{{$laporan->waktu_pelaksanaan}}</p>

        {{-- // INPUTAN WAKTU --}}
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="2">Waktu, Tanggal</td>
                <td width = "10">:</td>
                <td width ="300">{{ \Carbon\Carbon::parse($laporan->hari)->translatedFormat('l\, d F Y') }}</td>
            </tr>
        </table>
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="2">Pukul</td>
                <td width = "10">:</td>
                <td width ="300">{{ $laporan->pukul1 }} - {{ $laporan->pukul2 }}</td>
            </tr>
        </table>
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="2">Tempat</td>
                <td width = "10">:</td>
                <td width ="300">{{ $laporan->tempat }}</td>
            </tr>
        </table>
    </div>
    <div class="form-row">
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="3">Peserta</td>
                <td width = "10">:</td>
                <td rowspan="2" width ="300">{!!$laporan->peserta!!}</td>
            </tr>
            {{-- <tr>
                <td width = "65"></td>
                <td colspan="5"></td>
                <td width = "10"></td>
                <td>
                    -	Pengawas Lingkungan Hidup Ahli Muda
                </td>
            </tr>
            <tr>
                <td width = "65"></td>
                <td colspan="5"></td>
                <td width = "10"></td>
                <td>
                    -	Pengendali Dampak Lingkungan Ahli Muda
                </td>
            </tr>
            <tr>
                <td width = "65"></td>
                <td colspan="5"></td>
                <td width = "10"></td>
                <td>
                    u
                </td>
            </tr> --}}
        </table>
    </div>


    {{-- // V. TUJUAN (KOSONGKAN) --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>V.</b></td>
                <p style="margin: 0 0 0 0"><b>Tujuan</b></p>
            </tr>
        </table>
        <p style="margin: 0 4 5 57">{{ $laporan->tujuan }}
        </p>
    </div>


        {{-- // VI. IDENTIFIKASI MASALAH (KOSONGKAN) --}}
        <div class="paragraph" class="jarak"><br>
            <table border="0" width="650px">
                <tr>
                    <td width="14"></td>
                    <td width="35"><b>VI.</b></td>
                    <p style="margin: 0 0 0 0"><b>Identifikasi Masalah</b></p>
                </tr>
            </table>
            <p style="margin: 0 17 5 63">{!! $laporan->identifikasi_masalah !!}
            </p>
        </div>

        {{-- // VII. DOKUMENTASI (KOSONGKAN) --}}
        <div class="paragraph" class="jarak"><br>
            <table border="0" width="650px">
                <tr>
                    <td width="14"></td>
                    <td width="35"><b>VII.</b></td>
                    <p style="margin: 0 0 0 0"><b>Dokumentasi</b></p>
                </tr>
            </table>
            <p style="margin: 0 17 5 57">Berikut dokumentasi identifikasi permasalahan lingkungan :
            </p>
            

            
        {{-- // INPUTAN --}}
        <table border="0" width="650px">
            <tr>
                <td width = "57"></td>
                <td>{!! $laporan->dokumentasi !!}</td>
                {{-- <td><td align="center"> <img src="{{ ('asset/img/logo.jpeg') }}" width="120" height="120"></td>
                <td><td align="center"> <img src="{{ ('asset/img/logo.jpeg') }}" width="120" height="120"></td> --}}
            </tr>
            {{-- <tr>
                <td width = "57"></td>
                <td><td align="center"> <img src="{{ ('asset/img/logo.jpeg') }}" width="120" height="120"></td>
                <td><td align="center"> <img src="{{ ('asset/img/logo.jpeg') }}" width="120" height="120"></td>
            </tr> --}}
        </table>
        <p style="margin: 0 17 5 57">Laporan ini disusun sebagai salah satu dokumen pendukung dalam rangka pertanggungjawaban pelaksanaan kegiatan serta dapat digunakan sebagaimana mestinya
        </p>
        </div>

        {{-- TANDA TANGAN --}}
        <div class="judul" class="paragraph">
        <table border="0" width="700px"><br>
            <tr>
                <td width = "35"></td>
                <td><p style="margin: 1"><center><b>KEPALA BIDANG PENATAAN</b>
                    <br><b>DAN PENAATAN LINGKUNGAN</b></center><br></p>
                </td>    
                <td width ="35"></td>    
                <td><p style="margin: 1"><center><b>PENGENDALI</b>
                    <br><b>DAMPAK LINGKUNGAN AHLI MUDA</b></center><br></p>
                </td>   
            </tr>
            <br>
            <tr>
                <td width = "35"></td>
                <td> <p style="margin: 0"><center><b><u>AGUS TRISBUWONO. S.Hut</b></u> 
                    <br>Pembina<br>NIP. 19770804 200501 1 011</center></p>
                </td>    
                <td width ="20"></td>    
                <td> <p style="margin: 0"><center><b><u>PUSPITA DWI A. ST.M.Ling</b></u> 
                    <br>Penata<br>NIP. 19800427 201001 2 013</center></p>
                </td>   
            </tr>
        </table>
        <table border="0" width="700px"><br>
            <tr>
                <td width = "35"></td>
                <td><p style="margin: 0"><center>Mengetahui, <br><b>a.n KEPALA DINAS LINGKUNGAN HIDUP</b>
                    <br><b>SEKRETARIS</b></center><br></p>
                </td>   
                <td width = "35"></td> 
            </tr><br>
            <tr>
                <td width = "35"></td>
                <td><p style="margin: 0"><center><b><u>P A R M A N.SP</b></u> 
                    <br>Pembina Tk.1<br>NIP. 19690905 199201 1 001</center></p>
                </td>    
                <td width = "35"></td>
            </tr>
        </table>
        </div>


   
   
    {{-- <table border="1" width="650px"><br>
        <tr>
            <td width = "57"></td>
            <td colspan="2">
                {{-- <p>{!! $buku->keterangan !!}</p> --}}
            {{-- </td>
        </tr>
    </table>
        </div> --}}

    {{-- <table border = "1" class="table table-bordered" id="myTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Np</th>
                <th scope="col">Nomor Rak</th>
                
            </tr>
        </thead>
        <tbody>
            
            <tr align="center">
                <th scope="row">{{ $laporan->peserta }}</th>
                <td>{{ $laporan->judul }}</td>
                
            </tr>
            
        </tbody>
    </table> --}}
    
</div>
</body>
</html>