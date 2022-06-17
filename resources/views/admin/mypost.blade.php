@extends('admin.adminlay')

@section('container')
<body>
  <div class="row border rounded bg-light shadow m-5 justify-content-center">
    <main class="col-md-9 col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 btn-toolbar">MyPost</h1>
        @if (session('success'))
          <p>{{ session('success') }}</p>
        @endif
        <a href="/newpost" class="btn btn-success"><i class="bi bi-plus-square"></i> Tambah</a>
      </div>
       
         {{-- <article class="mt-5 text-center" style="overflow: visible">
          <p>{!! $up->jenis->nama !!}</p>
        <h2> 
        <a href="/admin/mypost/{{ $up->slug }}" class="text-decoration-none">{!! $up->isi!!}</a>
        </h2>
        <div style="max-height: 50px; overflow: hidden;">
        {!! $up->isi3!!}
        </div>
        <a href="/pea/{{ $up->isi }}" class="text-decoration-none">BACA SELENGKAPNYA</a>
        </article> --}}
        <table class="table border table-bordered border-dark bg-light">
          <thead>
            <tr>
              <th>No</th>
              <th class="w-100">Judul</th>
              <th colspan="3">Tindakan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($userpost as $up)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $up->isi }}</td>
              <td><a href="/detailpost/{{ $up->slug }}" class="btn btn-info fs-6 px-2 py-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Detail"><i class="bi bi-eye"></i></a></td>
              <td><a href="/edite/{{ $up->slug }}" class="btn btn-warning fs-6 py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a></td>
              <td>
                <form action="/delete/{{ $up->slug }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger fs-6 py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Hapus" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="bi bi-trash3"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
        @if (count($userpost) == 0)
        <div class="mt-5 row justify-content-center m-45px-b sm-m-25px-b">
                        <div class="p-5 bg-light border border-danger col-9 rounded-3">
                            <h1 class="dark-color font-alt text-center ">KOSONG</h1>
                        </div>
        </div>
        @endif

    </main>
</div>
</body>
@endsection