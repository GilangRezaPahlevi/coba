@extends('admin.adminlay')

@section('container')
@foreach ($C1 as $c)
     <div class="m-5 border rounded shadow bg-light" style="border-color: gray">
        <div class="m-5">
            <h1 class="text-start">Edit Post</h1>
            <hr>
            <div class="">
                <form action="/edite/{{ $c->slug }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-floating">
                            @error('isi')
                                <p class="">{{ $message }}</p>
                            @enderror
                            <h4>Judul Artikel :</h4>
                           
                            {{-- @error digunakan untuk menampilakn error yang di buat di controller --}}
                            <input type="text" name="isi" class="w-75 border border-2 p-2 mb-3 @error('isi') is-invalid @enderror" id="isi" autocomplete="off"value="{{ old('isi',$c->isi) }}" placeholder="Judul">
                            {{-- {{ old('username') berfungsi mengambil data yg sebelumnya pernah diisi }} --}}
                            
                        </div>
                        {{-- <div class="form-floating">
                            <input type="text" name="isi2" class="form-control @error('isi2') is-invalid @enderror" id="isi2" autofocus autocomplete="off" required value="{{ old('isi2') }}">
                            <label for="isi2">Description :</label>
                            @error('isi2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="form-floating">
                            @error('jenis_id')
                                <p>{{ $message }}</p>
                            @enderror
                            <h4>Kategori :</h4>
                            <select name="jenis_id" class="w-75 border border-2 p-2 mb-3">
                                @foreach ($NP as $n)
                                @if (old('jenis_id', $c->jenis_id) ==  $n->id )
                                    <option value="{{ $n->id }}" selected>{{ $n->nama }}</option>
                                @else
                                    <option value="{{ $n->id }}">{{ $n->nama }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            @error('img')
                                <p>{{ $message }}</p>
                            @enderror
                            <h4>Post Img :</h4>
                            @if ($c->img)
                                <div class="text-center">
                                    <center><img src="{{ asset('storage/' . $c->img) }}" alt="img-preview" class="img-preview img-thumbnails" style="height: 200px;"></center> 
                                </div>
                            @else
                                <div class="text-center">
                                    <center><img alt="img-preview" class="img-preview img-thumbnails" style="display: none; height: 200px;"></center> 
                                </div>
                            @endif
                           
                            <input type="file" name="img" class="img-input" onchange="previewImg()" id="img" style="display: none;">
                            <div class="input-group-append mt-3">
                                <a onclick="document.getElementById('img').click();" class="btn" style="cursor: pointer">
                                    <span class="p-2 text-light fs-6 border border-info bg-success rounded-start text-decoration-none border-end-0"style="cursor: pointer">Select Img</span>
                                    <span id="nameimg" class="p-2 text-dark fs-6 border rounded-end border-info bg-success bg-opacity-50 text-decoration-none border-start-0"style="cursor: pointer; margin:-5px;"></span>
                                </a>
                            </div>
                        </div>
                        <div class="form-floating">
                            @error('isi3')
                                <p>{{ $message }}</p>
                            @enderror
                            <h4>Description Artikel :</h4>
                             
                            <div class="w-75 border border-2 p-2 text-start des" style="margin-left: 12.5%">               
                                <input id="isi3" type="hidden" name="isi3" value="{{ old('isi3', $c->isi3) }}">
                                <trix-editor input="isi3" style="min-height: 200px" class="des"></trix-editor>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success m-5 w-50">Tambah</button>    
                </form>
            </div>
        </div>
    </div>
@endforeach
   
@endsection