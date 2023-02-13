<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\BankLoginRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BankAuthController extends Controller
{
    public function create()
    {
        if (Auth::guard('bank')->check())
            return redirect()->route('bank.dashboard');
        return view('auth.bank-login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(BankLoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->route('bank.dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('bank')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('bank.login')->with('status', 'logged-out');
    }

}
