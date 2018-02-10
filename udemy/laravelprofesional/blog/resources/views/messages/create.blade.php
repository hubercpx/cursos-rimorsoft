@extends('layout')

@section('contenido')
<h3>Contactanos</h3>
<h2>Escribeme</h2>

@if( session()->has('info') )
    <h3>{{ session()->has('info') }}</h3>
@else

<form method="POST" action="{{ route('messages.create') }}">
    <label for="nombre">
        Nombre
        <input type="text" name="nombre" value="{{ old('nombre') }}">
    </label>
    <label for="email">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </label>
    <label for="mensaje">
        Mensaje
        <textarea type="text" name="mensaje">{{ old('mensaje') }}</textarea>
    </label>
    <input type="submit" name="" value="Enviar">
</form>
@endif
<hr>
@stop
