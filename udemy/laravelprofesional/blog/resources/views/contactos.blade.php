@extends('layout')

@section('contenido')
<h3>Contactanos</h3>
<h2>Escribeme</h2>
<form method="POST" action="contacto">
    <label for="nombre">
        Nombre
        <input type="text" name="nombre" value="">
    </label>
    <label for="email">
        Email
        <input type="email" name="email" value="">
    </label>
    <label for="mensaje">
        Mensaje
        <textarea type="text" name="mensaje" value=""></textarea>
    </label>
    <input type="submit" name="" value="Enviar">
</form>
@endsection
