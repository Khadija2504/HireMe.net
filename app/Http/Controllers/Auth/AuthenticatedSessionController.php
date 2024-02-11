<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\registerUserRequest;
use App\Models\entreprises;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function dashboard(Request $request){
        if (Auth::guard('web')->check()) {
            session(['user_id' => Auth::guard('web')->id()]);
        }
            $userId = session('user_id');
            if(!isset($userId)){
                
                return redirect()->route('login_form');
            }
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $file_extension = $file->getClientOriginalExtension();
                $file_name = time() . '.' . $file_extension;
                $path = 'imgs/offres/';
                $file->move($path, $file_name);
                $validated['photo'] = $path . '/' . $file_name;
            }
            $users = user::where('id', $userId)->get();
            $user = user::find($userId);
        return view('home', compact('users','user'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

    if (Auth::guard('web')->attempt($credentials)) {
        if(Auth::user()->role == 'user') {
            return redirect()->route('user.dashboard');
        }else {
            return redirect()->route('welcome');
        }
        
    }
    
    return back()->withInput()->withErrors(['email' => 'Invalid email or password']);

    }

    public function userLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('login_form');
    }

    public function userRegisterCreate(registerUserRequest $request ){
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
        User::create($validated);
        return redirect()->route('login');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
