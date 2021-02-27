<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('home');
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
        return view('profile.index');
    }
    public function profileEdit()
    {
        return view('dashboard');
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
