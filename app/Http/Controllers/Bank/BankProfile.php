<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankProfileRequest;
use Illuminate\Http\Request;

class BankProfile extends Controller
{
    public function edit(Request $request)
    {
        return view('bank.profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(BankProfileRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();

        return redirect()->route('bank.profile')->with('status', 'profile-updated');

    }
}
