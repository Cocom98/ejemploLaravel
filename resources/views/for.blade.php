@extends('layout')

@section('seccion')

@for ($i = 0; $i < 10; $i++)
    <h5>el valor actual es {{ $i }}</h5><br>
@endfor

@endsection