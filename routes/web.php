<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\cate;
use App\Http\Controllers\Coba1Controller;
use App\Http\Controllers\ler;
use App\Models\coba1;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;


//routing tanpa controller
Route::get('/', function () {
    return view('h2', [
        //penggunaan eager loading di laravel bisa menyelesaikan masalah "N + 1"
        //contoh eager loading "tabel::with(['relasi tabel','relasi tabel'])"
        "mlo" => coba1::with(['jenis'])->latest()->filter(request(['search']))->paginate(10),
        "title" => "h2"
    ]);
});


//routing dengan controller

// Route::get('/', [Coba1Controller::class, 'let']);

Route::get('/pea', [Coba1Controller::class, 'let']);

Route::get('/pea/{coba1:isi}', [Coba1Controller::class, 'let2']);

Route::get('/pe', [ler::class, 'let3']);

Route::get('/je/{user:name}', [Coba1Controller::class, 'let6']);

Route::get('/jenis/{jenis:nama}', [Coba1Controller::class, 'jenis']);

Route::get('/jenislist', [Coba1Controller::class, 'jenislist']);

Route::get('/jel', [Coba1Controller::class, 'let7']);

Route::get('/jel/{user:name}', [Coba1Controller::class, 'let6']);

//guest = user yg belum login
//auth = user yg telah login
// penggunaan "name('login')" akan digunakan untuk memindahkan guest yg ingin mengakses ruang admin ke login cara mengubah letak kembali nya guset bisa diubah bagian route->"name('nama terserah')" pastikan mengubahnya juga di file authenticate.php   
Route::get('/login', [Coba1Controller::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [Coba1Controller::class, 'loginput']);

Route::get('/register', [Coba1Controller::class, 'reg']);

Route::get('/newpost', [Coba1Controller::class, 'new_post'])->middleware('auth');

Route::get('/edite/{coba1:slug}', [Coba1Controller::class, 'edite'])->middleware('auth');

Route::post('/edite/{coba1:slug}', [Coba1Controller::class, 'ined'])->middleware('auth');

Route::post('/newpost', [Coba1Controller::class, 'inpost'])->middleware('auth');

Route::delete('/delete/{coba1:slug}', [Coba1Controller::class, 'delete'])->middleware('auth');

Route::get('/detailpost/{coba1:slug}', [Coba1Controller::class, 'detail'])->middleware('auth');

Route::post('/register', [Coba1Controller::class, 'reginput']);

Route::get('/admin', [Coba1Controller::class, 'admin'])->middleware('auth');

//penggunaan can digunakan untuk membuat sebuah slot akses yg bisa di akses oleh siapa saja yg tercantum di gate 'hakakses' yg bisa dilihat di AuthServiceProvider.php
//can juga bisa diisi dengan middleware
//can tidak bisa digunakan route::resource
// Route::get('/admin', [Coba1Controller::class, 'admin'])->can('hakakses');

Route::get('/mypost', [Coba1Controller::class, 'mypost'])->middleware('auth');

Route::post('/logout', [Coba1Controller::class, 'logout']);

//pengunaan routing resource dengan bantuan controller
//penggunaan except('class') pada route resource memiliki fungsi unuk mematikan sebuaah fungsi di dalam controller
Route::resource('/admin/mypost', admincontroller::class)->middleware('akses');

//.................................................................................................//

Route::resource('/admin/category', cate::class)->middleware('akses');

//..................................................................................................//
