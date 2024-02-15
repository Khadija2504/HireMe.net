<?php

namespace App\Http\Controllers;

use App\Http\Requests\competences_userRequest;
use App\Models\competences;
use App\Models\competences_user;
use Illuminate\Http\Request;

class CompetencesController extends Controller
{
   public function competencesCreate1(competences_userRequest $request){
    // dd($request);
    $validatedRequest = $request->validated();
    // dd($validatedRequest);
    $create = competences_user::create($validatedRequest);
    // dd($create);
    return redirect()->back();
   }

   public function competencesCreate(competences_userRequest $request){
        $validatedRequests = $request->validated();
        $competenceIds = $validatedRequests['competences_id'];
        $user_id = $validatedRequests['users_id'];
        $type = $validatedRequests['type_user'];
        $createdCompetences = [];
        
        foreach ($competenceIds as $competenceId) {
            $create = competences_user::create(['competences_id' => $competenceId, 'users_id' => $user_id, 'type_user' => $type]);
            $createdCompetences[] = $create;
        }
        
        return redirect()->back()->with('success', 'Competences created successfully');
    }

    public function addSkills(competences_userRequest $request){
        $validatedRequests = $request->validated();
        // dd($request);
        $competenceIds = $validatedRequests['competences_id'];
        $offre_demploi_id = $validatedRequests['offre_demploi_id'];
        $type = $validatedRequests['type_user'];
        $createdCompetences = [];
        
        foreach ($competenceIds as $competenceId) {
            $create = competences_user::create(['competences_id' => $competenceId, 'offre_demploi_id' => $offre_demploi_id, 'type_user' => $type]);
            $createdCompetences[] = $create;
        }
        return back();
    }

    
}