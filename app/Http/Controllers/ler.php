<?php

namespace App\Http\Controllers;

use App\Models\mo;
use Illuminate\Http\Request;

class ler extends Controller
{
    public function let()
    {
        return view('h2', [
            "mlo" => mo::moon(),
            "title" => "h2"
        ]);
    }

    public function let2($saus)
    {
        return view('sau', [
            "title" => "saus",
            "pup" => mo::ca($saus)
        ]);
    }

    public function let3()
    {
        return view('ba', [
            "ami" => mo::amir(),
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
