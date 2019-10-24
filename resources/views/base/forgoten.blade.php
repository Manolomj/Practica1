@extends('base')
@section('contenido')


<h1>Has olvidado tu password?</h1>
<p>Introduce aquí tu correo y te actualizaremos tu contraseña:</p> 
<form action="{{ url('home') }}" method="get">
@csrf

    <input type="email" name="correo" id="correo" placeholder="Email" value="{{ old('correo') }}">
    <input type="submit" value="enviar">
    
</form>

@stop