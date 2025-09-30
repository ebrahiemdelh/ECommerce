<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\User;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credits = $request->validated();
        if (Auth::attempt($credits)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            Flasher::error('Wrong Email Or Password', title: 'Invalid Credentials');
            return redirect()->back();
        }
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);
        $request->session()->regenerate();
        Flasher::info('Account Created Successfully', title: 'Info');
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        return redirect()->route('front.home');
    }
}
