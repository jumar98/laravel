<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
}
