<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderControllerController extends Controller
{
    public function index()
    {
        return view('backend.header.index');
    }
}
