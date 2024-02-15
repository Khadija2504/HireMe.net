<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\EducationRequest;
use App\Http\Requests\AuthEducationRequest;
use App\Http\Requests\cursus_educatifsRequest;
use App\Models\cursus_educatifs;
use Illuminate\Http\Request;

class CursusEducatifsController extends Controller
{

    // admin only can display this function 
    public function cursusEducatifs(cursus_educatifsRequest $request)
    {
        $validated = $request->validated();

        cursus_educatifs::create($validated);
        return redirect()->back();
    }
}