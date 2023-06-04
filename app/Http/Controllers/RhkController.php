<?php

namespace App\Http\Controllers;

use App\Models\RhkModel;
use Illuminate\Http\Request;

class RhkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rhk = RhkModel::get();
        return view('rhk.index', [
            'rhk'=>$rhk
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
    public function show(RhkModel $rhkModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RhkModel $rhkModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RhkModel $rhkModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RhkModel $rhkModel)
    {
        //
    }
}
