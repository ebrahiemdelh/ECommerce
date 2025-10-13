<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\User;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credits = $request->validated();
        if (Auth::attempt($credits)) {
            $request->session()->regenerate();

            Flasher::info(__('auth.Logged in'), title: __('auth.Logged In'));
            return redirect()->intended('/');
        } else {
            Flasher::error(__('auth.Wrong'), title: __('auth.Invalid Credentials'));
            return redirect()->back();
        }
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);
        $request->session()->regenerate();
        Flasher::info(__('words.created', ['name' => __('words.Account')]), title: __('auth.Registered'));
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        return redirect()->route('front.home');
    }
}
