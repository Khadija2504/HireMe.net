<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\entreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EntreprisesController extends Controller
{
   
    public function index(){
        return view('auth.login');
    }
    public function dashboard(){
        return view('company.dashboard');
    }
    public function login(LoginRequest $request){
        $check = $request->all();
        if(Auth::guard('entreprise')->attempt(['email' => $check['email'] ,
         'password' => $check['password']])){
            return redirect()->route('company.dashboard');
         }else{
            return back();
         };
    }
    public function companyLogout(){
        Auth::guard('entreprise')->logout();
        return redirect()->route('login_form');
    }

    public function register(){
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function show(entreprises $entreprises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(entreprises $entreprises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entreprises $entreprises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprises $entreprises)
    {
        //
    }
}
