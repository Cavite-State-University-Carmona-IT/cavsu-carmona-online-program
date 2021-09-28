<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramCoordinatorLoginController extends Controller
{

    public function index()
    {
        if(Auth::check() && (Auth::user()->hasRole('program_coordinator') || Auth::user()->hasRole('administrator'))){
            return redirect()->route('program-coordinator.dashboard');
        } elseif (Auth::check())
        {
            return redirect('/');
        } else {
            return view('auth.program-coordinator-login');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && (Auth::user()->hasRole('program_coordinator') || Auth::user()->hasRole('administrator'))) {
            return redirect()->intended('program-coordinator/dashboard')->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('program-coordinator.login');
    }
}
