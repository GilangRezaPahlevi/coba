<?php

namespace App\Http\Controllers;

use App\Models\Coba2;
use App\Http\Requests\StoreCoba2Request;
use App\Http\Requests\UpdateCoba2Request;

class Coba2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreCoba2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoba2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coba2  $coba2
     * @return \Illuminate\Http\Response
     */
    public function show(Coba2 $coba2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coba2  $coba2
     * @return \Illuminate\Http\Response
     */
    public function edit(Coba2 $coba2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoba2Request  $request
     * @param  \App\Models\Coba2  $coba2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoba2Request $request, Coba2 $coba2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coba2  $coba2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coba2 $coba2)
    {
        //
    }
    public function let()
    {
        return view('h2', [
            "mlo" => Coba2::all(),
            "title" => "h2"
        ]);
    }

    public function let2(Coba2 $coba2)
    {
        return view('saau', [
            "title" => "saus",
            "pup" => $coba2
        ]);
    }

    public function let3()
    {
        return view('ba', [
            "ami" => Coba2::all(),
            "title" => "h3"
        ]);
    }

    public function let4()
    {
        return view('coba1', [
            "title" => "h1"
        ]);
    }

    public function let5()
    {
        return view('h4', [
            "title" => "h4"
        ]);
    }
}
