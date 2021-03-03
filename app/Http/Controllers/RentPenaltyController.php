<?php

namespace App\Http\Controllers;

use App\Penalty;
use Illuminate\Http\Request;
use App\Rent;

class RentPenaltyController extends Controller
{
    public function index()
    {
        $penaltys = Penalty::paginate(10);

        return view('rent-penalty.index', compact('penaltys'));
    }
    
    public function create()
    {
        $rents = Rent::all();
       
        return view('rent-penalty.create',[
            'rents' => $rents
        ]);
    }
    
    public function store(Request $request)
    {
        Penalty::create($request->all());
      
        return redirect('/admin/rent-penalty');
    }
    
    public function show($id)
    {
        $penalty = Penalty::findOrFail($id);
        $rent = Rent::findOrFail($id);
        return view('rent-penalty.show',[
            'penalty' => $penalty,
            'rent' => $rent
        ]);
    }
    
    public function edit($id)
    {
        $penalty = Penalty::findOrFail($id);
       
        $rent = Rent::all();

        return view('rent-penalty.edit',[
            'penalty' => $penalty,
            'rents' => $rent
        ]);
        
    }
    
    public function update(Request $request,$id)
    {       
       $penalty = Penalty::where('id', $id)->first();
       $penalty->from_date = $request->from_date;
       $penalty->to_date = $request->to_date;
       $penalty->total = $request->total;      
       $penalty->save();
       
        return redirect('/admin/rent-penalty');
    }
   
    public function destroy($id)
    {
        Penalty::where('id', $id)->delete();

        return redirect('/admin/rent-penalty');
    }

    public function multiplePenaltiesDelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $penalty) 
		{
			Penalty::where('id', $penalty)->delete();
		}
		return redirect()->back();
	}
}
