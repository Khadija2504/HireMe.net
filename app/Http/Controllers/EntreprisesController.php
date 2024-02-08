<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\EntrepriseRequest;
use App\Http\Requests\Auth\registerCompanyRequest;
use App\Models\entreprises;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntreprisesController extends Controller
{
   
    public function index(){
        return view('auth.login');
    }
    public function dashboard(){
        return view('company.dashboard');
    }
    public function login(EntrepriseRequest $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('entreprise')->attempt($credentials)) {
        return redirect()->route('company.dashboard');
    }

    return back()->withInput()->withErrors(['email' => 'Invalid email or password']);

        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function companyLogout(){
        Auth::guard('entreprise')->logout();
        return redirect()->route('login_form');
    }

    public function companyRegister(){
        return view('auth.register');
    }
    
    public function companyRegisterCreate(registerCompanyRequest $request){
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        entreprises::create($validated);
        return redirect()->route('login');
    }
}
