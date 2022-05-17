<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotoController extends Controller
{
    public function index()
    {
        return view('votos.index');
    }
}
