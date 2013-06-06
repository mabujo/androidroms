@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Roms ::
@parent
@stop

{{-- Page content --}}
@section('content')

<ul>
    @foreach($roms as $rom)
        <li>{{ $rom->name }} : {{ $rom->status }}</li>
    @endforeach
</ul>
@stop
