<?php

namespace App\Http\Controllers;

use App\Models\ArsipModel;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arsip = ArsipModel::with('rhk')->get();
        return view('arsip.index', [
            'arsip'=>$arsip
        ]);
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
    public function show(ArsipModel $arsipModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipModel $arsipModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArsipModel $arsipModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipModel $arsipModel)
    {
        //
    }
}
