<?php

namespace App\Http\Controllers;

use App\Models\cate as ModelsCate;
use Illuminate\Http\Request;

class cate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cate.cate', [
            "cate" => ModelsCate::all(),
            "title" => "category"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cate.newcate', [
            "title" => "category"
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
        $ca = $request->validate([
            "nama" => ['required', 'max:225']
        ]);

        ModelsCate::create($ca);

        return redirect("/admin/category")->with('success', 'category baru berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.cate.editcate', [
            "title" => "Edit Category",
            "C1" => ModelsCate::where('id', $id)->get()
        ]);
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
        $up = $request->validate([
            'nama' => ['required', 'max:255']
        ]);

        ModelsCate::where('id', $id)->update($up);

        return redirect('/admin/category/')->with('success', 'Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsCate::destroy($id);
        return redirect('/admin/category')->with('success', 'Data Berhasil Di Hapus');
    }
}
