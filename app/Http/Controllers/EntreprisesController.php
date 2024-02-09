<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\EntrepriseRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\registerCompanyRequest;
use App\Models\entreprises;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntreprisesController extends Controller
{
   
    public function index(){
        return view('auth.login');
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function home(){
        return view('home');
    }
    public function login(EntrepriseRequest $request)
{
    // $loginUserRequest = $loginRequest->only('email', 'password');
    $credentials = $request->only('email', 'password');

    if (Auth::guard('entreprise')->attempt($credentials)) {
        return redirect()->route('company.dashboard');
    // } else 
    // if(Auth::guard('web')->attempt($loginUserRequest)) 
    // {
    //     dd(Auth::guard('web'));
    //     return redirect()->route('user.dashboard');
    }
    
    // return back()->withInput()->withErrors(['email' => 'Invalid email or password']);

    }
    public function companyLogout(){
        Auth::guard('entreprise')->logout();
        return redirect()->route('login_form');
    }
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

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