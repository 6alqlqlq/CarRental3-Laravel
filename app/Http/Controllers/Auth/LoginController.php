<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('home');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            $role = User::find(Auth::id())->role;

            if ($role == 1) {
                $request->session()->put('role', 1);
            } elseif ($role == 2) {
                $request->session()->put('role', 2);
            } else {
                $request->session()->put('role', 3);
            }

            return redirect()->route('home');
        } else {
            return redirect()->route('login')
                ->with('error', 'Username And Password Are Wrong.');
        }
    }
}
