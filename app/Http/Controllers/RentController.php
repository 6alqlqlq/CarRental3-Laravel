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
        return view('rents.show');
    }

    public function createRent()
    {
        return view('rents.create');
    }    
     
    public function index()
    {        
        $rent = Rent::paginate(10);

        return view('rents-manage.index', compact('rent'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        User::create($request->all());
      
        return redirect('/admin/users-management');
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request,$id)
    {       
        // dd($request);
       $user = User::where('id', $id)->first();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->username = $request->username;
       $user->role = $request->role;
       $user->password = $request->password;
       $user->save();
       
        // $users->update($request->all());
        // doesnt update all

        return redirect('/admin/users-management');
    }
   
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect('/admin/users-management');
    }

    public function multipleusersdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $user) 
		{
			User::where('id', $user)->delete();
		}
		return redirect()->back();
	}
       
}
