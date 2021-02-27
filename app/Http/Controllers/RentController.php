<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        return view('rents.index');
    }

    public function show()
    {
        return view('rents.show');
    }
    public function create()
    {
        return view('rents.create');
    }
}
