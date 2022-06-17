@extends('admin.adminlay')

@section('container')
@foreach ($userpost as $up)

<div class="m-5 border bg-light shadow rounded" style="border-color: gray">
    <div class="float-start" style="margin-right:-140px ">
        <a href="/mypost" class="btn btn-success fs-6 py-1 px-2 shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Kembali"><i class="bi bi-arrow-left-square"></i></a>
        <a href="/edite/{{ $up->slug }}" class="btn btn-warning fs-6 py-1 px-2 shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a>
         <form action="/delete/{{ $up->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger fs-6 py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Hapus" onclick="return confirm('Yakin Ingin Menghapus ?')">
              <i class="bi bi-trash3"></i>
            </button>
        </form>
        
    </div>
    <h1 class="">{{ $up ->isi }}</h1>
    <div class="mt-1 mb-4">
           Category : <a href="/je/{{ $up->jenis->nama}}" class="text-decoration-none">{{ $up->jenis->nama}}</a>
    </div>
    <div class="">
        <p>{!! $up->img !!}</p>
        <img src="{{ asset('storage/' . $up->img) }}" alt="" srcset="">
    </div>
    <div>
        <p>{!! $up->isi2 !!}</p>
        <p>{!! $up->isi3 !!}</p>
    </div>
</div>
    @endforeach
@endsection