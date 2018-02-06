<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
class PagesController extends Controller
{
    public function home()
    {
        return view('contactos');
    }


    public function saludo($nombre = "Invitado")
    {
        $html = "<h2>Contenido html</h2>"; // ingresado por formulario
        $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";

        $consolas = [
            "Play Station 4",
            "Xbox One",
            "Wii U"
        ];
        return view('contactos', compact('nombre', 'html', 'script', '$consolas'));
    }
}
