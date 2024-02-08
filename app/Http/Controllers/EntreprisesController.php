<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\registerCompanyRequest;
use App\Models\entreprises;
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
    public function login(LoginRequest $request){
        $check = $request->all();
        if(Auth::guard('entreprise')->attempt(['email' => $check['email'] ,
         'password' => $check['password']])){
            return redirect()->route('company.dashboard');
         }else{
            return back();
         };
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
        return redirect()->route('auth');
    }


}
