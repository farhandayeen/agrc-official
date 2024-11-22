<?php

namespace App\Http\Controllers;

// use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function showForm()
    {
        return view('pages.register');
    }

    
}
