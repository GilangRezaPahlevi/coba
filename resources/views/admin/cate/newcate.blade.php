@extends('admin.adminlay')

@section('container')
    <div class="m-5 border rounded shadow bg-light" style="border-color: gray">
        <div class="m-5">
            <h1 class="text-start">New Post</h1>
            <hr>
            <div class="">
                <form action="/admin/category" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-floating">
                            @error('isi')
                                <p class="">{{ $message }}</p>
                            @enderror
                            <h4>Judul Artikel :</h4>
                           
                            {{-- @error digunakan untuk menampilakn error yang di buat di controller --}}
                            <input type="text" name="nama" class="w-75 border border-2 p-2 mb-3 @error('isi') is-invalid @enderror" id="isi" autocomplete="off" value="{{ old('isi') }}" placeholder="Judul">
                            {{-- {{ old('username') berfungsi mengambil data yg sebelumnya pernah diisi }} --}}
                            
                        </div>
                        <button type="submit" class="btn btn-success m-5 w-50">Tambah</button>    
                </form>
            </div>
        </div>
    </div>
@endsection