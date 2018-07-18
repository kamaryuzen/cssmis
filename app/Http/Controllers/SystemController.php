<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function show_dashboard()
    {
        return view('show_dashboard');
    }
}
