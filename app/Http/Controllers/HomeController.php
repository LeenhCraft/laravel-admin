<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        // return 'Hola desde el controlador';
        return view('welcome');
    }
}
