<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartBookController extends Controller
{
    public function index() 
    {
        return view('start-book.booking');
    }
}
