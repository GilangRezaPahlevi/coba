@extends('layout.lay1')

@section('container')
 @if ($pup->img)
            <div class="">
                <img src="{{ asset('storage/'. $pup->img) }}" alt="" style="max-height: 300px;">
            </div>
        @else
            <img src="https://source.unsplash.com/1000x300/?{{ $pup->jenis->nama }}" alt="" srcset="">
        @endif
    <h1>{{ $pup ->isi }}</h1>
    <div class="mt-1 fs-5">
        penulis: <a href="/je/{{ $pup->user->name}}">{{ $pup->user->name}}</a>
    </div>
    <div class=" mb-4 fs-6">
        category: <a href="/je/{{ $pup->jenis->nama}}">{{ $pup->jenis->nama}}</a>
    </div>
    <div class="mb-5">
    {!! $pup->isi2 !!}
    
    <div class="mt-5">
    {!! $pup->isi3 !!}
    </div>
    </div>
@endsection