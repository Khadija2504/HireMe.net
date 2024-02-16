<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Entreprise;
use App\Models\entreprises;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function statistics(){
        $adminId = session('user_id');
        $admin = User::find($adminId);
        $usersWithPostCount = User::withCount('posts')->get();
        $userWithMaxPosts = $usersWithPostCount->sortByDesc('posts_count')->first();
        $userWithLastMaxPosts = $usersWithPostCount->sortByDesc('posts_count')->last();
        $companyWithJobsCount = entreprises::withCount('offreDemploi')->get();
        $companyWithMaxJobs = $companyWithJobsCount->sortByDesc('offreDemploi_count')->first();
        return view('components.statistics', compact('admin', 'userWithMaxPosts', 'userWithLastMaxPosts', 'companyWithMaxJobs'));
    }
}