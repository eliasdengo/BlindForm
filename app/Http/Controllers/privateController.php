<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privateController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

}
