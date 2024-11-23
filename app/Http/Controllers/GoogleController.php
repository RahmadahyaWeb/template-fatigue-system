<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            $existingUser = User::where('email', $user->getEmail())->first();

            $user_mail = $user->getEmail();
            $user_name = $user->getName();

            if ($existingUser) {
                Auth::login($existingUser);

                session()->flash('success', 'Successfully Logged In');
                return redirect('/');
            } else {
                return view('auth.register', compact('user_mail', 'user_name'));
            }
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
