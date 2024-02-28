<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember' => 'boolean',
        ]);

        $minutes = 10;
        $throttleKey = Str::lower($request->email).'|'.$request->ip();
        $expiresAt = Carbon::now()->addMinutes($minutes);
        
        if (Cache::has($throttleKey) && Cache::get($throttleKey) >= 3)
        {
            // Lockout
            Session::flash('failed_login_message', 'Too many attempts! Please try again in ' . $minutes . ' minutes.');
            return redirect()->route('login');
        }

        if (! Auth::attempt(['email' => $request->email,'password' => $request->password], $request->remember))
        {        
            if (! Cache::has($throttleKey))
            {
                Cache::add($throttleKey, 1, $expiresAt);
            }
            else
            {
                Cache::increment($throttleKey);
            }
            
            Session::flash('failed_login_message', 'Login Failed! Credentials do not match.');
            return redirect()->route('login');
        }

        Cache::forget($throttleKey);

        return redirect()->route('landing');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}