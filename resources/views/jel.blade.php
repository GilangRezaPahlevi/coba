@extends('layout.lay1')

@section('container')
<h1>PENULIS ARTIKEL</h1>
@foreach ($jens as $jen)
<p class="fs-3 text-start ms-5"><a class="text-decoration-none" href="/jel/{{$jen->name}}">{{ $jen->name }}</a></p>   
@endforeach
@endsection