<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

class SubscriptionController extends Controller
{

public function subscribe(Request $request, Newsletter $newsletter)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $newsletter->subscribe($request->email);

    return redirect()->back()->with('success', 'You have subscribed successfully!');
}

}
