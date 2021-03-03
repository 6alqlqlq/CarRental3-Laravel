<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{   
    public function index(Request $request)
    {     
        if (request('sortBy')){
           $cars = Cars::where('engine', 'LIKE', request('sortBy'))->paginate(10);
        }elseif(request('gearbox')){
            $cars = Cars::where('gearbox', 'LIKE', request('gearbox'))->paginate(10);
        }elseif(request('year')){
            $cars = Cars::orderBy('year', $request->year)->paginate(10);
        }elseif(request('capacity')){
            $cars = Cars::orderBy('capacity', $request->capacity)->paginate(10);
        }elseif(request('doors')){
            $cars = Cars::orderBy('gearbox', $request->doors)->paginate(10);
        }else{
            $cars= Cars::paginate(10);
        } 

		return view('cars', compact('cars'));
    }

    public function show($id)
    {
       $cars = Cars::where('id',$id)->firstOrFail();
	   return view('car')->with('cars',$cars);
    }
}
