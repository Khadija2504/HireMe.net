<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\registerUserRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateProfile(Request $request){
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
            $users = user::where('id', $userId)->get();
            $user = user::find($userId);
            // dd($user);
            return view('profile.editUser',compact('users','user'));
    }
    public function updateProfileUser(registerUserRequest $request){
        $validated = $request->validated();
        dd($validated);
        $userId = session('user_id');
        $user = User::find($userId);

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
        // $userData = User::updated($validated);
        $userData = $user->Update($validated);

        dd($userData);

        return redirect()->back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
