<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masterController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function member()
    {
        return view('pages.member');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }

}

