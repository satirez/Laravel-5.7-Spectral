<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePublicController extends Controller
{
    

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
