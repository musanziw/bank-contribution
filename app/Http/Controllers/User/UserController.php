<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(6);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $agencies = Agency::all();
        $roles = Role::all();
        return view('user.create', [
            'agencies' => $agencies,
            'roles' => $roles
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'phone' => 'required',
            'address' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'role_id' => $request->get('role'),
            'status' => $request->get('status'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        return redirect()->route('user.index')->with('success', 'user-created');
    }

}
