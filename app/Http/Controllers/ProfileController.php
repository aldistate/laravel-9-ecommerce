<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_profile()
    {
        $user = Auth::user();

        return view('show_profile', compact('user'));
    }

    public function edit_profile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return Redirect::back();
    }
}
