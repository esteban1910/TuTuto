<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function store(Request $request){
        return $request->get('nombre');
    }
}
