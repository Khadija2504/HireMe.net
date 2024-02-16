<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\competences;
use App\Models\competences_user;
use App\Models\entreprises;
use App\Models\OffreDemplois;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function postForm($id){
        $userId = session('user_id');
        $users = User::where('id', $userId)->get();
        $user = user::find($userId);
        return view("offres_d'emploi.postForm", compact('id', 'userId', 'user', 'users'));
    }
    public function post(PostRequest $request){
        $validated = $request->validated();
        $id = $validated['id_offre_demplois'];
        post::create($validated);
        // dd(post::create($validated));
        return redirect()->route('dispalyPosts', compact('id'));
    }
    public function dispaly($id){
        $userId = session('user_id');
        $entreprisesId = session('company_id');
        $entreprises = entreprises::where('id', $entreprisesId)->get();
        $entreprise = entreprises::find($entreprisesId);
        $users = User::where('id', $userId)->get();
        $user = user::find($userId);
        $admin = User::find($userId);
        $offreCompetence = competences_user::with('competenceProv')->where('offre_demploi_id', $id)->get();
        $posts = post::with('users')->orderBy('updated_at', 'desc')->get();
        $offre = OffreDemplois::with('entreprises')->find($id);
        return view("offres_d'emploi.dispalyPosts", compact('posts','user', 'users', 'admin', 'offre', 'offreCompetence', 'entreprises', 'entreprise'));
    }
}