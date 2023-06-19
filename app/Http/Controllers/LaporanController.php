<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $laporan = LaporanModel::all();
        return view('laporan.draft',[
            'laporan'=>$laporan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $this->validate($request,[
        // 'nama' => 'required',
        // 'alamat' => 'required',
        // ]);

        $data=$request->all();
        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('image');
            // nama file
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = 'storage/laporan';
            // upload file
        // $file->move($tujuan_upload,$nama_file);
        // $data['image'] = $nama_file;

        LaporanModel::create($data);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil disimpan');
    }
    /**
     * Display the specified resource.
     */
    public function show(LaporanModel $laporan)
    {
        return view('laporan.detail_laporan', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanModel $laporan)
    {
        return view('laporan.edit', compact(['laporan']));
        // HARUS PAKE COMPACT
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanModel $laporan)
    {
        $data=$request->all();
            // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('image');
        // if($file != '') {

            // nama file
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = 'storage/laporan';
            // upload file
        // $file->move($tujuan_upload,$nama_file);
        // $data['image'] = $nama_file;
        // File::delete('storage/laporan/'.$laporan->image);
        // }

        $laporan->update($data);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanModel $laporan)
    {
        $laporan->delete($laporan->id);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil dihapus');
    }

    public function createPDF()
    {
        $laporan = LaporanModel::all();
        $pdf = PDF::loadView('laporan.templatePDF', compact('laporan'));
        // download PDF file with download method
        return $pdf->stream();
    }

    //PRINT TABEL
    public function report($id){
        $laporan = LaporanModel::find($id);
        $pdf = PDF::loadview('laporan.report',['laporan'=>$laporan])->setOptions(['chroot'=> realpath(base_path()), 'defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }
}
