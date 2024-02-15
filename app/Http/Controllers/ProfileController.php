<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\registerUserRequest;
use App\Http\Requests\ProfileUpCompanyRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\competences;
use App\Models\competences_user;
use App\Models\cursus_educatifs;
use App\Models\cursus_educatifs_user;
use App\Models\entreprises;
use App\Models\experiences_proves;
use App\Models\langues_maitrisees;
use App\Models\langues_maitrisees_user;
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

    public function updateProfile(Request $request){
        if (Auth::guard('web')->check()) {
            session(['user_id' => Auth::guard('web')->id()]);
        }
            $userId = session('user_id');
            if(!isset($userId)){
                return redirect()->route('login_form');
            }
            $users = user::where('id', $userId)->get();
            $user = user::find($userId);
            $competences = competences::all();
            $langues_maitrisees = langues_maitrisees::all();
            $myLangues = langues_maitrisees_user::with('langues_maitrise')->where('users_id', $userId)->get();
            $competenceUser = competences_user::with('competenceProv')->where('users_id', $userId)->get();
            
            // dd($myLangues->langues_maitrisees->nom_langues_maitrisees);
            // $cursus_educatifss = cursus_educatifs_user::with('cursus_educatifs')->where('users_id', $userId)->get();
            $experiences = experiences_proves::where('user_id', $userId)->orderBy('date', 'desc')->get();
            $cursus_educatif = cursus_educatifs::where('user_id', $userId)->orderBy('date', 'desc')->get();
            // dd($cursus_educatifss);
            return view('profile.editUser',compact('users','user','competences', 'competenceUser', 'userId', 'langues_maitrisees', 'experiences', 'cursus_educatif', 'myLangues'));
    }
    public function up(ProfileUpdateRequest $request){
        $validated = $request->validated();
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
        $userData = $user->Update($validated);
        return redirect()->back();
    }

    public function upCompany(ProfileUpCompanyRequest $request){
        $validated = $request->validated();
        // dd($request);
        $entrepriseId = session('entreprise_id');
        $entreprise = entreprises::find($entrepriseId);

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
        $entrepriseData = $entreprise->Update($validated);

        // dd($entrepriseData);

        return redirect()->back();
    }

    public function visitUser($id){
        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);
            $userResult = user::where('id', $id)->get();
            $myLangues = langues_maitrisees_user::with('langues_maitrise')->where('users_id', $id)->get();
            $competenceUser = competences_user::with('competenceProv')->where('users_id', $id)->get();
            $experiences = experiences_proves::where('user_id', $id)->orderBy('date', 'desc')->get();
            $cursus_educatif = cursus_educatifs::where('user_id', $id)->orderBy('date', 'desc')->get();
            return view('profile.visitUser', compact('myLangues', 'experiences', 'cursus_educatif', 'competenceUser', 'userResult', 'entreprise', 'entreprises'));
        }elseif(!Auth::guard('entreprise')->check()){
            $userId = session('user_id');
            if(!isset($userId)){
                return redirect()->route('login_form');
            }
            $users = User::where('id', $userId)->get();
            $user = user::find($userId);
            $userResult = user::where('id', $id)->get();
            $myLangues = langues_maitrisees_user::with('langues_maitrise')->where('users_id', $id)->get();
            $competenceUser = competences_user::with('competenceProv')->where('users_id', $id)->get();
            $experiences = experiences_proves::where('user_id', $id)->orderBy('date', 'desc')->get();
            $cursus_educatif = cursus_educatifs::where('user_id', $id)->orderBy('date', 'desc')->get();
        return view('profile.visitUser', compact('myLangues', 'experiences', 'cursus_educatif', 'competenceUser', 'userResult', 'user', 'users'));
        }
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
