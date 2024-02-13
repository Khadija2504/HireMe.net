<?php

namespace App\Http\Controllers;

use App\Http\Requests\competences_userRequest;
use App\Http\Requests\OffreDemploisRequest;
use App\Models\competences;
use App\Models\competences_user;
use App\Models\entreprises;
use App\Models\OffreDemplois;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreDemploisController extends Controller
{
    public function offreDemplois(){
        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        }
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $competences = competences::all();
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);

            return view("offres_d'emploi.offres",compact('entreprise','entreprises', 'entreprisesId', 'competences'));
    }

    public function addOffer(OffreDemploisRequest $request, competences_userRequest $requestComp){
        $validatedCpmo = $requestComp->validated();
        dd($validatedCpmo);
        // competences_user::create($validatedCpmo);
        dd(competences_user::create($validatedCpmo));
        $validated = $request->validated();
        OffreDemplois::create($validated);
        return back();
    }

    public function displayOffreDemplois(){
        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);
            $offreDemplois = OffreDemplois::all();
            $offre = OffreDemplois::with('competences');

            return view("offres_d'emploi.dispalyOffres",compact('entreprise','entreprises', 'offreDemplois', 'offre'));
        }elseif(!Auth::guard('entreprise')->check()){
            session(['user_id' => Auth::guard('web')->id()]);
            $userId = session('user_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $offreDemplois = OffreDemplois::with('entreprises')->orderBy('updated_at')->get();
            $users = User::where('id', $userId)->get();
            $user = user::find($userId);
            return view("offres_d'emploi.dispalyOffres",compact('user', 'users', 'offreDemplois'));
        }
    }
    public function deleteOffer(OffreDemplois $offreDemplois){
        $offreDemplois->delete();
        return back();
    }
}
