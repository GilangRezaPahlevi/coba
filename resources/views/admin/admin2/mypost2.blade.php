@extends('admin.admin2.adminlay')

@section('container')
@foreach ($userpost as $up)

<div class="m-5 border bg-light shadow rounded" style="border-color: gray">
    <div class="float-start" style="margin-right:-140px ">
        <a href="/admin/mypost" class="btn btn-success fs-6 py-1 px-2 shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Hapus"><i class="bi bi-arrow-left-square"></i>Kembali</a>
        <a href="" class="btn btn-warning fs-6 py-1 px-2 shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="bi bi-pencil-square"></i>Edit</a>
         <form action="/admin/mypost/{{ $up->slug }}" method="post">
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
    <div>
        <p>{!! $up->isi2 !!}</p>
        <p>{!! $up->isi3 !!}</p>
    </div>
</div>
    @endforeach
@endsection