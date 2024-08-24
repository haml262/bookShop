<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function menu($menu)
    {
        return "<h1>Aqui se mostrara el menu de {$menu}</h1>";
    }
    
}