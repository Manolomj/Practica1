@extends('base')
@section('contenido')

@isset ($mensaje)
    <h6>{{ $mensaje }}</h6>
@endisset

<h2>Inicio de sesion:</h2>

<form action="{{ url('userhome') }}" method="post">
@csrf
    <input type="text" name="nombre" id="nombrefp" placeholder="Usuario" required value="{{ old('nombre') }}">
    <input type="password" name="clave" id="clavefp" placeholder="Password" required value="{{ old('clave') }}">
    <input type="submit" value="Login">
</form>

<br>

<form action="{{ url('forgoten') }}" method="get">
    @csrf
  <input type="submit" value="Olvidaste la contraseña?">
</form>


@stop
