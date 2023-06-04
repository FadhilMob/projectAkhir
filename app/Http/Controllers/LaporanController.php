<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
