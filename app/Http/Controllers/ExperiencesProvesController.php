<?php

namespace App\Http\Controllers;

use App\Http\Requests\experienceProviesRequest;
use App\Models\experiences_proves;
use Illuminate\Http\Request;

class ExperiencesProvesController extends Controller
{
    public function experienceProf(experienceProviesRequest $request){
        $validated = $request->validated();
        experiences_proves::create($validated);
        return redirect()->back();
    }
}
