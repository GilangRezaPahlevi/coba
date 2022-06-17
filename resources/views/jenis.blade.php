@extends('layout.lay1')

@section('container')
    @if (count($jen) == 0)
        <div class="mt-5 row justify-content-center m-45px-b sm-m-25px-b">
            <div class="p-5 bg-light border border-danger col-9 rounded-3">
            <h1 class="dark-color font-alt text-center ">KOSONG</h1>
            </div>
        </div>
    @else
        <h4>Category {{ $jen[0]->jenis->nama }}</h4>
        @foreach ($jen as $j)
            <div class="mt-3">
                @if ($j->img)
                    <div class="">
                        <img src="{{ asset('storage/'. $j->img) }}" alt="" style="max-height: 300px;">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1000x300/?{{ $j->jenis->nama }}" alt="" srcset="">
                @endif
            </div>
            <article class="mt-2 text-center mb-5" style="overflow: visible">
                <h2> 
                <a href="/pea/{{ $j->isi }}" class="text-decoration-none">{!! $j->isi!!}</a>
                </h2>
                <p class="text-center"  style="font-size: 20px">Penulis <a class="text-decoration-none" href="/je/{{ $j->user->name}}">{{ $j->user->name}}</a></p>
                <div style="max-height: 50px; overflow: hidden;">
                {!! $j->isi3!!}
                </div>
                <a href="/pea/{{ $j->isi }}" class="text-decoration-none">BACA SELENGKAPNYA</a>
            </article>
        @endforeach
        {{-- <div class="d-flex justify-content-center m-5 mw-50" >
            {{ $jen->onEachSide(1)->links() }}
        </div> --}}
    @endif
{{-- @if (count($jen) == 0)
    <div class="mt-5 row justify-content-center m-45px-b sm-m-25px-b">
        <div class="p-5 bg-light border border-danger col-9 rounded-3">
           <h1 class="dark-color font-alt text-center ">KOSONG</h1>
        </div>
    </div>
    @endif --}}
@endsection