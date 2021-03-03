<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsManageController extends Controller
{
    public function index()
    {
        $cars = Cars::paginate(10);

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $cars = new Cars;
        $cars->brand = $request->brand;
        $cars->model =  $request->brand;
       
        $file = $request->file('image')->store("public");
        $cars->image = $file;       
        $cars->year = $request->year;
        $cars->capacity = $request->capacity;
        $cars->doors = $request->doors;
        $cars->engine = $request->engine;
        $cars->gearbox = $request->gearbox;
        $cars->status = $request->status;
        $cars->hire_cost = $request->hire_cost;
        $cars->save();

        return redirect()->route('cars-management.index')
            ->with('success', 'Cars created successfully.');
    }

    public function show($id)
    {
        $car = Cars::findOrFail($id);

        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.edit', compact('car'));
    }
    
    public function update(Request $request, Cars $cars)
    {
        $cars->update($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Product updated successfully');
    }
    
    public function destroy(Cars $cars)
    {
        $cars->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Product deleted successfully');
    }

    public function multipleCarsDelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $car) 
		{
			Cars::where('id', $car)->delete();
		}
		return redirect()->back();
	}  

}
