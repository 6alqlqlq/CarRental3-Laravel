<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Cars::inRandomOrder()->take(8)->get();
		return view ('cars')->with('cars',$cars);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $cars = Cars::where('id',$id)->firstOrFail();
	   return view('car')->with('cars',$cars);
    }
}
