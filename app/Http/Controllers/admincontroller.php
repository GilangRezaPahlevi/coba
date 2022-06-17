<?php

namespace App\Http\Controllers;

use App\Models\coba1;
use App\Models\jenis;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin2.mypost', [
            'userpost' => coba1::where('user_id', auth()->user()->id)->get()->sortby('isi')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin2.NewPost', [
            'NP' => jenis::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inpost = $request->validate([
            'isi' => ['required', 'unique:coba1s'],
            'jenis_id' => ['required'],
            'isi3' => ['required']
        ]);

        $inpost['slug'] = str_replace(' ', '-', $inpost['isi']);

        $inpost['isi2'] = $inpost['isi3'];

        $inpost['user_id'] = auth()->user()->id;

        coba1::create($inpost);

        return redirect('/admin/mypost')->with('success', 'Selamat Anda Telah Mmembuat Postingan Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // return coba1::where('slug', $slug)->get();
        return view('admin.admin2.mypost2', [
            'userpost' => coba1::where('slug', $slug)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $coba1n = coba1::where('slug', $slug)->get();
        coba1::destroy($coba1n);
        return redirect('/mypost')->with('success', 'Berhasil Di Hapus');
        // return $coba1n;
    }
}
