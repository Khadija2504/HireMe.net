<?php

namespace App\Http\Controllers;

use App\Models\competences;
use App\Models\experiences_proves;
use App\Models\langues_maitrisees;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function generate(Request $request)
    {
        $userId = session('user_id');
            if(!isset($userId)){
                
                return redirect()->route('login_form');
            }
            
            $users = User::where('id', $userId)->get();
            $user = user::find($userId);
            $experiences = experiences_proves::where('user_id', $userId)->orderBy('date', 'desc')->get();

        // $pdf = Pdf::loadView('invoice', compact('users','user', 'experiences'));

        return view('invoice', compact('users','user', 'experiences'));
        // return $pdf->download('invoice.pdf');
    }
}