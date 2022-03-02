<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulerController extends Controller
{
    public function index()
    {
        return view('rooms.reguler');
    }
}
