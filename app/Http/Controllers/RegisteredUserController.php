<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request) {
        //validate the request
        $validFields = $request->validate([
            'full_name' => ['required', 'min:3'],
            'email_address' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        Log::debug('and here');

        //create the user
        $user = User::create($validFields);

//        //log the user in
        Auth::login($user);

        //redirect to the home page
        return redirect('/careers');
    }

    public function testing() {

    }
}
