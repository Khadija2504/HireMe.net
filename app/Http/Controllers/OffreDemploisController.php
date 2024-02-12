<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreDemploisRequest;
use App\Models\competences;
use App\Models\entreprises;
use App\Models\OffreDemplois;
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

    public function addOffer(OffreDemploisRequest $request){
        // dd($request);
        $validated = $request->validated();
        OffreDemplois::create($validated);
        return back();
    }

    public function displayOffreDemplois(){
        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        }
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);
            $offreDemplois = OffreDemplois::all();

            return view("offres_d'emploi.dispalyOffres",compact('entreprise','entreprises', 'offreDemplois'));
    }
    public function deleteOffer(OffreDemplois $offreDemplois){
        $offreDemplois->delete();
        return back();
    }
}
