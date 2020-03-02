
@extends('layout')

@section('seccion')

@if($edad >= 18)
    Eres mayor de edad
@elseif($edad = 17)
    Falta un año para alcanzar la mayoría de edad
@else
    Eres menor de edad
@endif

@endsection