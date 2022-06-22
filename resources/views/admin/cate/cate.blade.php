@extends('admin.adminlay')

@section('container')
    <body>
        <div class="row border rounded bg-light shadow m-5 justify-content-center">
            <main class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 btn-toolbar">Category</h1>
                    @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                    <a href="/admin/category/create" class="btn btn-success"><i class="bi bi-plus-square"></i> New Category</a>
                </div>
                <table class="table border table-bordered border-dark bg-light">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="w-100">Categoty</th>
                            <th colspan="2">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($cate) == 0)
                            <tr>
                                <td>#</td>
                                <td >KOSONG</td>
                                <td><a href="/admin/category/create" class="m-0 py-1 px-2 btn btn-success"><i class="bi bi-plus-square"></i></a></td>
                            </tr>
                        @endif
                        @foreach ($cate as $up)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $up->nama }}</td>
                                <td>
                                    <a href="/admin/category/{{ $up->id }}/edit" class="btn btn-warning fs-6 py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="/admin/category/{{ $up->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger fs-6 py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Hapus" onclick="return confirm('Yakin Ingin Menghapus ?')">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </body>
@endsection