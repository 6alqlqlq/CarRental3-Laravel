<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::latest()->paginate(10);

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cars::create($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Cars created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Cars::findOrFail($id);

        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $cars)
    {
        $cars->update($request->all());

        return redirect()->route('cars.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars)
    {
        $cars->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Product deleted successfully');
    }

    public function multiplecarsdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $car) 
		{
			Cars::where('id', $car)->delete();
		}
		return redirect()->back();
	}  

}
