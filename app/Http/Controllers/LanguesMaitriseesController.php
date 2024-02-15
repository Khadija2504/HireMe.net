<?php

namespace App\Http\Controllers;

use App\Http\Requests\languesMaitriseesRequest;
use App\Models\langues_maitrisees;
use App\Models\langues_maitrisees_user;
use Illuminate\Http\Request;

class LanguesMaitriseesController extends Controller
{
    public function languesMaitriseesCreate(languesMaitriseesRequest $request){
        $validatedRequests = $request->validated();
        $competenceIds = $validatedRequests['langues_maitrisees_id'];
        $user_id = $validatedRequests['users_id'];
        $createdCompetences = [];
        
        foreach ($competenceIds as $competenceId) {
            $create = langues_maitrisees_user::create(['langues_maitrisees_id' => $competenceId, 'users_id' => $user_id]);
            $createdCompetences[] = $create;
        }
        // dd($createdCompetences);
        
        return redirect()->back()->with('success', 'Competences created successfully');
    }
}
