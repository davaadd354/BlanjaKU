<?php

namespace App\Http\Controllers;



class BelajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function biodata()
    {
        return view('biodata');
    }
}

