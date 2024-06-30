<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validate and attempt to login
        $AuthN = Auth::attempt($request->validate([
            'email_address' => ['required', 'email'],
            'password' => ['required']
        ]));

        if (!$AuthN) {
            throw ValidationException::withMessages([
                'email_address' => 'Invalid Credentials: Password and/or email is incorrect/does not match'
            ]);
        } else {
            $request->session()->regenerate();
            return redirect('/careers');
        }
    }

    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
