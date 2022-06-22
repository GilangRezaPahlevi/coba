@extends('admin.adminlay')

@section('container')
@foreach ($C1 as $c)
     <div class="m-5 border rounded shadow bg-light" style="border-color: gray">
        <div class="m-5">
            <h1 class="text-start">Edit Post</h1>
            <hr>
            <div class="">
                <form action="/admin/category/{{ $c->id }}" method="POST">
                    @method('put')
                    @csrf
                        <div class="form-floating">
                            @error('nama')
                                <p class="">{{ $message }}</p>
                            @enderror
                            <h4>Judul Artikel :</h4>
                           
                            {{-- @error digunakan untuk menampilakn error yang di buat di controller --}}
                            <input type="text" name="nama" class="w-75 border border-2 p-2 mb-3 @error('nama') is-invalid @enderror" id="nama" autocomplete="off"value="{{ old('nama',$c->nama) }}" placeholder="Judul">
                            {{-- {{ old('username') berfungsi mengambil data yg sebelumnya pernah diisi }} --}}
                            
                        </div>
                        <button type="submit" class="btn btn-success m-5 w-50">Edit</button>    
                </form>
            </div>
        </div>
    </div>
@endforeach
   
@endsection