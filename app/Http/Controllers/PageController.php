<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }

    public function single()
    {
        return view('frontend.single');
    }
    public function collaborazioni()
    {
        return view('frontend.collaborazioni ');
    }
}
