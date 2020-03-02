@extends('layout')

@section('seccion')

<h1>lista</h1>

@foreach ($lista as $nombre)
<a href="#">{{$nombre}}</a><br>

@endforeach

@endsection