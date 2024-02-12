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
    $enterprise_id = $validatedRequest['entreprise_id'] = 1;
    $createdCompetences = [];
    
    foreach ($competenceIds as $competenceId) {
        $create = competences_user::create(['competences_id' => $competenceId, 'users_id' => $user_id, 'type_user' => $type, 'entreprise_id' => $enterprise_id]);
        $createdCompetences[] = $create;
    }

    return redirect()->back()->with('success', 'Competences created successfully');
}

    
}