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
            $offre_demploi_id = 1;

            return view("offres_d'emploi.offres",compact('entreprise','entreprises', 'entreprisesId', 'competences'));
    }

    public function addOffer(OffreDemploisRequest $request){
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
            $competences = competences::all();
            
            return view("offres_d'emploi.dispalyOffres",compact('entreprise','entreprises', 'offreDemplois', 'entreprisesId', 'competences'));
        }elseif(!Auth::guard('entreprise')->check()){
            $userId = session('user_id');
            if(!isset($userId)){
                
                return redirect()->route('login_form');
            }
            $offreDemplois = OffreDemplois::with('entreprises')->orderBy('updated_at')->get();
            $users = User::where('id', $userId)->get();
            $user = user::find($userId);
            $admin = User::find($userId);
            return view("offres_d'emploi.dispalyOffres",compact('user', 'users', 'offreDemplois', 'admin'));
        }
    }

    public function search(Request $request){
        // dd($request);

        if (Auth::guard('entreprise')->check()) {
            session(['company_id' => Auth::guard('entreprise')->id()]);
        
            $entreprisesId = session('company_id');
            if(!isset($entreprisesId)){
                
                return redirect()->route('login_form');
            }
            $entreprises = entreprises::where('id', $entreprisesId)->get();
            $entreprise = entreprises::find($entreprisesId);
            $offreDemplois = OffreDemplois::with('entreprises')->orderBy('updated_at')->get();
            $competences = competences::all();
            $search = $request->input('search');
            $offreSearch = OffreDemplois::where('titre', 'like', "%$search%")->orWhere('type', 'like', "%$search%")->get();
            $entrepriseResult = entreprises::where('nom', 'like', "%$search%")->get();
            foreach($entrepriseResult as $entrepriseResults){
                $offreEntreprise = OffreDemplois::find($entrepriseResults->id)->get();   
            }
            return view('partials.resultSearch', compact('entreprise','entreprises', 'competences', 'entreprisesId', 'offreEntreprise', 'entrepriseResult'))->with('offreDemplois', $offreSearch);

        }else if(!Auth::guard('entreprise')->check()){
            $userId = session('user_id');
            if(!isset($userId)){
                return redirect()->route('login_form');
            }
            $offreDemplois = OffreDemplois::with('entreprises')->orderBy('updated_at')->get();
            $users = User::where('id', $userId)->get();
            $user = user::find($userId);
            $search = $request->input('search');
            $offreSearch = OffreDemplois::where('titre', 'like', "%$search%")->orWhere('type', 'like', "%$search%")->get();
            $entrepriseResult = entreprises::where('nom', 'like', "%$search%")->get();
            if(!empty($entrepriseResult)){
                foreach($entrepriseResult as $entrepriseResults){
                    if(isset($entrepriseResults->id)){
                        $idEntreprise = $entrepriseResults->id;
                        $offreEntreprise = OffreDemplois::find($idEntreprise)->get();
                        // dd($offreEntreprise);
                        return view('partials.resultSearch', compact('user', 'users', 'offreEntreprise', 'entrepriseResult'))->with('offreDemplois', $offreSearch);
                    }
                }
            }
        return view('partials.resultSearch', compact('user', 'users', 'entrepriseResult'))->with('offreDemplois', $offreSearch);
        }
    }
    public function deleteOffreDemploi($id){
        $offreDemploi = OffreDemplois::where('id', $id);
        $offreDemploi->delete();
        return back();
    }
    public function deleteOffer(OffreDemplois $offreDemplois){
        $offreDemplois->delete();
        return back();
    }
}