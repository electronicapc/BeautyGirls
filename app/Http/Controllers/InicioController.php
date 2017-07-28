<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('galeria');
    }
    
    public function single()
    {
    	return view('single');
    }
}
