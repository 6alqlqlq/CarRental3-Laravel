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
        dd($request);
        if($request->from_date < $request->to_date){
            //    save
            $rent = Rent::create();
            $rent->user_id = $request->user;
            $rent->car_id = $request->car;
            $rent->from_date = $request->from_date;
            $rent->to_date = $request->to_date;
            $rent->save();

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
        return view('rents-manage.create');
    }
    
    public function store(Request $request)
    {
        Rent::create($request->all());
      
        return redirect('/admin/rent-management');
    }
    
    public function show($id)
    {
        $user = Rent::findOrFail($id);

        return view('rents-manage.show', compact('rent'));
    }
    
    public function edit($id)
    {
        $user = Rent::findOrFail($id);
        return view('rents-manage.edit', compact('rent'));
    }
    
    public function update(Request $request,$id)
    {
       $rent = Rent::where('id', $id)->first();
       $rent->name = $request->name;
       $rent->email = $request->email;
       $rent->username = $request->username;
       $rent->role = $request->role;   
       $rent->password = $request->password;
       $rent->save();
    
       return redirect('/admin/rents-management');
    }
   
    public function destroy($id)
    {
        Rent::where('id', $id)->delete();

        return redirect('/admin/rents-management');
    }

    public function multipleusersdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $rent) 
		{
			Rent::where('id', $rent)->delete();
		}
		return redirect()->back();
	}
       
}
