<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemController extends Controller
{
    function index()
    {
    return view('them.index');

    }
}
