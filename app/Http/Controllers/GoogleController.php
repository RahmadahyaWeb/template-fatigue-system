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
                return redirect('/');
            } else {
                return view('auth.register',compact('user_mail','user_name'));
            }
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }

    public function register(Request $request)
{
    $request->validate([
        'number'    => 'required|numeric',
        'address'   => 'required|string|max:255',
    ]);

    DB::beginTransaction();

    try {
        $user = User::create([
            'email'          => $request->user_mail,
            'name'           => $request->user_name,
            'remember_token' => Str::random(10),
            'role_id'        => 3,
        ]);

        $customer = Customer::create([
            'user_id' => $user->id,
            'number'  => $request->number,
            'address' => $request->address,
        ]);

        if ($user && $customer) {
            DB::commit();
            Auth::login($user);
            return redirect('/')->with('success', 'Registration successful!');
        }

        throw new \Exception('Failed to create user or customer data.');

    } catch (\Exception $e) {
        DB::rollBack();

        return redirect()->back()->withErrors([
            'error' => 'Registration failed: ' . $e->getMessage(),
        ]);
    }
}
}
