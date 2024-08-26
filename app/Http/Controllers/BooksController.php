<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BooksController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function mostrarLibros()
    {
        $jsonContenido = file_get_contents('libro.json');    //se lee el contenido del archivo json.

        $data = json_decode($jsonContenido, true);         //se parsea el contenido en un arreglo.

        return view('index', ['libros' => $data['libro']]);    // se envia hacia la vista.
    }
    
};