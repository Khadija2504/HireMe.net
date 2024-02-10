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
    }
    if (Auth::guard('entreprise')->check()) {
        session(['company_id' => Auth::guard('entreprise')->id()]);
    }
    
    return back()->withInput()->withErrors(['email' => 'Invalid email or password']);

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

    public function edit(){

        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        }
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprisess = entreprises::where('id', $entreprisesId)->get();
            $entreprises = entreprises::find($entreprisesId);

            return view('profile.edit',compact('entreprisess','entreprises'));
    }    
    public function updateProfile(Request $request){
        dd($request);
    }

    public function companyRegisterCreate(registerCompanyRequest $request)
{
    $validated = $request->validated();

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'imgs/offres/';
        $file->move($path, $file_name);
        $validated['photo'] = $path . '/' . $file_name;
    }

    $validated['password'] = Hash::make($validated['password']);
    entreprises::create($validated);
    
    return redirect()->route('login');
}

}