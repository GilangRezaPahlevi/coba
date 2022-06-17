@extends('layout.lay1')

@section('container')
<h1>CATEGORY ARTIKEL</h1>
@foreach ($jenis as $j)
<p class="fs-3 text-start ms-5"><a class="text-decoration-none" href="/jenis/{{$j->nama}}">{{ $j->nama }}</a></p>   
@endforeach
@endsection