@extends('layout.lay1')

@section('container')
@foreach ($mlo as $m)
<div class="row">
    <article class="mt-5 col">
        {{-- <p class="text-start">{{ $loop->iteration }}.</p> --}}
        @if ($m->img)
            <div class="">
                <img src="{{ asset('storage/'. $m->img) }}" alt="" style="max-height: 300px;">
            </div>
        @else
            <img src="https://source.unsplash.com/1000x300/?{{ $m->jenis->nama }}" alt="" srcset="">
        @endif
        
        <h2 class="text-center">
            <a style="text-decoration-line: none; color:blueviolet" class="ms-3" href="/pea/{{ $m->isi }}">{{ $m->isi }}</a>
        </h2>
        <p class="text-center"  style="font-size: 20px">Penulis <a class="text-decoration-none" href="/je/{{ $m->user->name}}">{{ $m->user->name}}</a></p>
        <p class="text-center"  style="font-size: 15px; margin-top:-12px;">category <a class="text-decoration-none" href="/jenis/{{ $m->jenis->nama}}">{{ $m->jenis->nama}}</a></p>
        <div style="max-height: 50px; overflow: hidden;">
        {!! $m->isi2 !!}
        </div>
        <a href="/pea/{{ $m->isi }}">BACA SELENGKAPNYA</a>
    </article>
</div>
@endforeach 
@if (count($mlo) == 0)
<div class="mt-5 row justify-content-center m-45px-b sm-m-25px-b">
                        <div class="p-5 bg-light border border-danger col-9 rounded-3">
                            <h1 class="dark-color font-alt text-center ">KOSONG</h1>
                        </div>
    </div>
    @endif
    <div class="d-flex justify-content-center m-5 mw-50" >
        {{ $mlo->onEachSide(1)->links() }}
    </div>
@endsection