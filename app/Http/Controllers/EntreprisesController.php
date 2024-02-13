<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\EntrepriseRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\registerCompanyRequest;
use App\Http\Requests\OffreDemploisRequest;
use App\Models\competences;
use App\Models\entreprises;
use App\Models\OffreDemplois;
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
    public function dashboard(Request $request){
        
        if (Auth::guard('entreprise')->check()) {
            session(['entreprise_id' => Auth::guard('entreprise')->id()]);
        }
            $entrepriseId = session('entreprise_id');
            if(!isset($entrepriseId)){
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entrepriseId)->get();
            $entreprise = entreprises::find($entrepriseId);
        return view('dashboard', compact('entreprises','entreprise'));
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

    public function companyRegister(){
        return view('auth.register');
    }

    public function updateProfileCompany(){

        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        }
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);
            $competences = competences::all();
            $offreDemplois = OffreDemplois::find($entreprisesId)->orderBy('updated_at', 'desc')->get();

            return view('profile.edit',compact('entreprise','entreprises','competences', 'offreDemplois'));
    }

    public function companyRegisterCreate(registerCompanyRequest $request)
{
    $validated = $request->validated();

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'imgs/photos/';
        $file->move($path, $file_name);
        $validated['photo'] = $path . '/' . $file_name;
    }
    if ($request->hasFile('background')) {
        $file = $request->file('background');
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'imgs/backs/';
        $file->move($path, $file_name);
        $validated['background'] = $path . '/' . $file_name;
    }

    $validated['password'] = Hash::make($validated['password']);
    entreprises::create($validated);                                                   
    
    return redirect()->route('login');
}

}