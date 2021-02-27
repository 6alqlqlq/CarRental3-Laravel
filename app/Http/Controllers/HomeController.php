<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Cars;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $cars = Cars::inRandomOrder()->limit(5)->get();
        return view('home',[

        ]);
    }

    public function aboutUs()
    {
        return view('aboutus');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        
        return view('profile.index',[
            'user' => $user,
            ]);
    }
    public function profileEdit()
    {
        return view('profile.edit');
    }
    // public function multipleusersdelete(Request $request)
	// {
	// 	$id = $request->id;
	// 	foreach ($id as $user) 
	// 	{
	// 		User::where('id', $user)->delete();
	// 	}
	// 	return redirect()->back();
	// }
}
