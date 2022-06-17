@extends('layout.lay1')

@section('container')
@foreach ($ami as $a)
<div class="row mt-5">
    <p class="col-lg bg-primary text-white">{{ $a }}</p>
</div>
@endforeach
@endsection