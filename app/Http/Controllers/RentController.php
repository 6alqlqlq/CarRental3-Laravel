<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cars;
use App\User;
use App\Rent;

class RentController extends Controller
{
    public function rents($id)
    {
        $car = Cars::where('id',$id)->first();
        $user = User::where('id',Auth::user()->id)->first();

        return view('rents.index',[
            'car' => $car,
            'user' => $user
            ]);
    }

    public function myRents()
    {
        $rents = Rent::where('user_id',Auth::user()->id)->get();
        
        return view('profile.rents',[
            'rents' => $rents,
        ]);
    }

    public function createRent(Request $request)
    {        
        if($request->from_date < $request->to_date){            
            Rent::create($request->all());

            return view('profile.rents');
        }else {
            return view('home');
        }
              
    }    
     
    public function index()
    {        
        $rents = Rent::paginate(10);
       
        return view('rents-manage.index', compact('rents'));
    }
    
    public function create()
    {
        $users = User::all();
        $cars = Cars::all();
        return view('rents-manage.create',[
            'users' => $users,
            'cars' =>$cars
        ]);
    }
    
    public function store(Request $request)
    {
        // $request
        Rent::create($request->all());
      
        return redirect('/admin/rents-management');
    }
    
    public function show($id)
    {
        $rent = Rent::findOrFail($id);

        return view('rents-manage.show', compact('rent'));
    }
    
    public function edit($id)
    {
        $rent = Rent::findOrFail($id);
        $users = User::all();
        $cars = Cars::all();

        return view('rents-manage.edit', [
            'rent' =>$rent,
            'users' =>$users,
            'cars'=>$cars,
        ]);
    }
    
    public function update(Request $request,$id)
    {
        $rent  = Rent::findOrFail($id);

        $input = $request->all();
    
        $rent->fill($input)->save();
         
    
       return redirect('/admin/rents-management');
    }
   
    public function destroy($id)
    {
        Rent::where('id', $id)->delete();

        return redirect('/admin/rents-management');
    }

    public function multipleRentDelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $rent) 
		{
			Rent::where('id', $rent)->delete();
		}
		return redirect()->back();
	}
       
}
