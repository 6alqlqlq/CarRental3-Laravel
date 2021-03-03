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
        $cars1 = Cars::inRandomOrder()->limit(4)->get();
        $cars2 = Cars::inRandomOrder()->limit(4)->get();
        // $sepcialCars = Cars::inRandomOrder()->limit(3)->get();
        return view('home',[
            'cars1' => $cars1,
            'cars2' => $cars2,
            // 'special' => $sepcialCars
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
    public function calendar()
    {
        https://github.com/maddhatter/laravel-fullcalendar
        return view('calendar');
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
        $user = User::where('id',Auth::user()->id)->first();
        return view('profile.edit',[
            'user' => $user,
        ]);
    }

    public function profileUpdate()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('profile.indext');
    }

}
