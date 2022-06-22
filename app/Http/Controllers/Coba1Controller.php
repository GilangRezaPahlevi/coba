<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\coba1;
use App\Models\jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Storecoba1Request;
use App\Http\Requests\Updatecoba1Request;
use App\Models\cate;
use App\Models\cate_coba1;
use App\Models\cate_coba1s;
use Illuminate\Pagination\coba2page;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Coba1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(request('search'));
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
     * @param  \App\Http\Requests\Storecoba1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecoba1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coba1  $coba1
     * @return \Illuminate\Http\Response
     */
    public function show(coba1 $coba1)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coba1  $coba1
     * @return \Illuminate\Http\Response
     */
    public function edit(coba1 $coba1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecoba1Request  $request
     * @param  \App\Models\coba1  $coba1
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecoba1Request $request, coba1 $coba1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coba1  $coba1
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // $coba1n = coba1::where('slug', $slug)->get();
        // coba1::destroy($coba1n);
        // return redirect('/mypost')->with('success', 'Berhasil Di Hapus');
    }

    public function let()
    {
        return view('h2', [
            //penggunaan eager loading di laravel bisa menyelesaikan masalah "N + 1"
            //contoh eager loading "tabel::with(['relasi tabel','relasi tabel'])"
            "mlo" => Coba1::with(['jenis'])->latest()->filter(request(['search']))->paginate(10),
            "title" => "h2"
        ]);
    }

    public function let2(Coba1 $coba1)
    {
        return view('saau', [
            "title" => "saus",
            "pup" => $coba1->load('jenis')
        ]);
    }

    public function let3()
    {
        return view('ba', [
            "ami" => Coba1::all(),
            "title" => "ba"
        ]);
    }

    public function let4()
    {
        return view('coba1', [
            "title" => "coba1"
        ]);
    }

    public function pag($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new coba2page($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }


    public function let6(user $user)
    {
        $myArray = $user->coba1->load(['user', 'jenis'])->sortBy('isi');

        $myCollectionObj = collect($myArray);

        $da = $this->pag($myCollectionObj);

        return view(
            'je',
            [
                "title" => "je",
                "jen2" => $myArray,
                "jen" => $da
            ]
        );
    }

    public function jenis(jenis $jenis)
    {
        $myArray = $jenis->coba1->load('jenis')->sortBy('isi');

        $myCollectionObj = collect($myArray);

        $da = $this->pag($myCollectionObj);
        return view('jenis', [
            "title" => "jenis",
            "jen2" => $myArray,
            "jen" => $da
        ]);
    }

    public function jenislist()
    {
        return view('jenislist', [
            "title" => "JenisList",
            "jenis" => jenis::get('nama')
        ]);
    }

    public function let7()
    {
        return view('jel', [
            "title" => "jel",
            "jens" => user::get('name')
        ]);
    }

    public function login()
    {
        return view('login.login', [
            "title" => "login",
        ]);
    }

    public function reg()
    {
        return view('login.new_log', [
            "title" => "registrasi",
        ]);
    }

    public function admin()
    {
        //cara memblokir guset selain menggunakan middleware
        //pengunaan abort untuk menampilkan sebuah halaman error
        // if (auth()->guest()) {
        //     abort(403, "salah");
        // }

        //cara memblokir auth selain maizera yg lain tidak bisa akses
        // if (auth()->user()->name !== 'MaiZera') {
        //     abort(403, "salah");
        // }

        //memblokir user dengan gate dan untuk membuat web silahkan ke file AuthServiceProvider.php
        // $this->authorize('hakakses');

        return view('admin.admin', [
            "title" => "admin",
        ]);
    }

    public function MyPost()
    {
        return view('admin.mypost', [
            "title" => "MyPost",
            "userpost" => coba1::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function new_post()
    {
        return view('admin.new_post', [
            "title" => "New Post",
            "NP" => jenis::all(),
            "cate" => cate::all()
        ]);
    }

    public function detail($slug)
    {
        return view('admin.detail', [
            "title" => "Detail Post",
            "userpost" => coba1::where('slug', $slug)->get()
        ]);
    }

    public function edite($slug)
    {
        return view('admin.edit', [
            "title" => "Edit Post",
            "NP" => jenis::all(),
            "C1" => coba1::where('slug', $slug)->get()
        ]);
    }

    public function reginput(Request $request)
    {
        //menggambil data dari halaman register dengan menggunakan Request 
        $validatedData = $request->validate([
            'name' => ['required', 'unique:users', 'max:255', 'min:3'],
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255'],
            // '_token' => ['required']
        ]);
        //mengubah password dengan hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        // $validatedData['name'] = str_replace(' ', '-', $validatedData['name']);

        //mengirim data ke database melalui models
        User::create($validatedData);

        //mengirim user ke halaman login dan menampilkan notifikasi success
        return redirect('/login')->with('succes', 'Berhasil reg silahkan login');
        // return $request->all();
    }

    public function loginput(Request $request)
    {
        $log = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($log)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('error', 'gagal login');
    }

    public function inpost(Request $request)
    {
        // ddd() atau Dump, Die, Debug digunakan untuk mengetahui informasi pada suatu nilai variabel
        // ddd($request);
        // return $request->file('img')->store('img');
        // $product = new coba1;
        $inpost = $request->validate([
            'isi' => ['required', 'unique:coba1s'],
            'jenis_id' => ['required'],
            'img' => ['image', 'file', 'max:20000'],
            'isi3' => ['required'],
        ]);

        if ($request->file('img')) {
            $inpost['img'] = $request->file('img')->store('img');
        }

        $inpost['slug'] = str_replace(' ', '-', $inpost['isi']);
        $inpost['isi2'] = $inpost['isi3'];
        $inpost['user_id'] = auth()->user()->id;




        $product = coba1::create($inpost);
        $category = cate::find([$request['cate']]);
        $product->cate()->attach($request['cate']);

        return redirect('/mypost')->with('success', 'Selamat Anda Telah Mmembuat Postingan Baru');
        // return $inpost;
    }

    public function logout()
    {
        Auth::logout();

        Request()->session()->invalidate();

        Request()->session()->regenerateToken();

        return redirect('/');
    }

    public function ined(Request $request, $slug)
    {
        $cs = coba1::where('slug', $slug)->get();
        $inpo = [
            'jenis_id' => ['required'],
            'img' => ['image', 'file', 'max:20000'],
            'isi3' => ['required']
        ];
        $in = $request->validate([
            'isi' => ['max:255']
        ]);


        if ($request->isi != $cs[0]->isi) {
            $inpo['isi'] = 'required|unique:coba1s';
        }

        $inpost = $request->validate($inpo);
        if ($request->file('img')) {
            if ($request->oldimg) {
                Storage::delete($request->oldimg);
            }
            $inpost['img'] = $request->file('img')->store('img');
        }

        $inpost['slug'] = str_replace(' ', '-', $in['isi']);
        $inpost['isi2'] = $inpost['isi3'];
        $inpost['user_id'] = auth()->user()->id;
        // return $inpost;
        coba1::where('slug', $slug)
            ->update($inpost);

        return redirect('/mypost')->with('success', 'Selamat Anda Telah Mengubah Postingan');
    }

    public function delete($slug)
    {
        $coba1n = coba1::where('slug', $slug)->get();
        if ($coba1n->img) {
            Storage::delete($coba1n->img);
        }
        coba1::destroy($coba1n);
        return redirect('/mypost')->with('success', 'Berhasil Di Hapus');
    }
}
