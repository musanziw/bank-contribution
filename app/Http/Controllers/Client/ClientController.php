<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Service;
use Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::latest()->paginate(12);
        return view('client.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        $services = Service::all();
        return view('client.create', [
            'services' => $services
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'account_number' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'sex' => 'required',
            'is_active' => 'nullable',
            'birthdate' => 'required',
            'services' => 'required',
        ]);
        $client = Client::create([
            'name' => $request->get('name'),
            'account_number' => $request->get('account_number'),
            'phone' => $request->get('phone'),
            'sex' => $request->get('sex'),
            'address' => $request->get('address'),
            'is_active' => (bool)$request->get('is_active'),
            'birthdate' => $request->get('birthdate'),
            'user_id' => Auth::id()
        ]);
        $client->services()->attach($request->get('services'));
        return redirect()->route('client.index')
            ->with('success', 'client-created');
    }


    public function edit(Client $client)
    {
        $services = Service::all();
        return view('client.edit', [
            'client' => $client,
            'services' => $services
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
            'account_number' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'sex' => 'required',
            'is_active' => 'nullable',
            'birthdate' => 'required',
            'services' => 'required',
        ]);
        $client->update([
            'name' => $request->get('name'),
            'account_number' => $request->get('account_number'),
            'phone' => $request->get('phone'),
            'sex' => $request->get('sex'),
            'address' => $request->get('address'),
            'is_active' => (bool)$request->get('is_active'),
            'birthdate' => $request->get('birthdate')
        ]);
        $client->services()->sync($request->get('services'));
        return redirect()->route('client.index')
            ->with('success', 'client-updated');
    }

}
