<?php

namespace App\Http\Controllers;

use App\Models\jenis;
use App\Http\Requests\StorejenisRequest;
use App\Http\Requests\UpdatejenisRequest;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejenisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejenisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejenisRequest  $request
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejenisRequest $request, jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenis $jenis)
    {
        //
    }
}
