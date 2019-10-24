@extends('base')
@section('contenido')


<h2>Bienvenido!</h2>
<p>Pulse botón para comenzar.</p>

<form action="{{url('nuevaruta')}}" method="get">
    @csrf
    <button type="submit" class="a1">
        Login
    </button>
</form>

@stop