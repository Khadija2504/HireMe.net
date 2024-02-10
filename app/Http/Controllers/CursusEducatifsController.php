<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\EducationRequest;
use App\Http\Requests\AuthEducationRequest;
use App\Models\cursus_educatifs;
use Illuminate\Http\Request;

class CursusEducatifsController extends Controller
{

    public function createCursure(EducationRequest $request)
    {
        // dd($request);
        $validated = $request->validated();
        // cursus_educatifs::created($validated);
        dd(cursus_educatifs::create($validated));
        return redirect()->route('updateProfile');
    }
}
