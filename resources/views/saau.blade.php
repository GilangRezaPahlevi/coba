@extends('layout.lay1')

@section('container')
 @if ($pup->img)
            <div class="">
                <img src="{{ asset('storage/'. $pup->img) }}" alt="" style="max-height: 300px;">
            </div>
        @else
            <img src="https://source.unsplash.com/1000x300/?{{ $pup->id }}" alt="" srcset="">
        @endif
    <h1>{{ $pup ->isi }}</h1>
    <div class="mt-2 mb-4">
        penulis: <a href="/je/{{ $pup->user->name}}">{{ $pup->user->name}}</a>
    </div>
    <div>
    {!! $pup->isi2 !!}
    
    <div class="mt-5">
    {!! $pup->isi3 !!}
    </div>
    </div>
@endsection