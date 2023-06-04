<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('myword.docx');

        // Edit String
        $phpWord->setValues([
            'nama' => $nama,
            'alamat' => $alamat
        ]);

        // Saving the document as Word file...
        $phpWord->saveAs('hasilEdit.docx');

        $laporan = LaporanModel::all();
        return view('word',[
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

        LaporanModel::create($request->all());
        return redirect()->route('laporan.index')->with('success', 'Data berhasil disimpan');
    }
    /**
     * Display the specified resource.
     */
    public function show(LaporanModel $laporanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanModel $laporanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanModel $laporanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanModel $laporanModel)
    {
        //
    }
}
