<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$jsondata = file_get_contents('libro.json');

$data = json_decode($jsondata);

var_dump($data);


class BooksController extends Controller
{
    public function home()
    {
        return view('index');
    }
    
};