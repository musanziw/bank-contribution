<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Town;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $towns = Agency::paginate(5);
        return view('towns.index', [
            'towns' => $towns
        ]);
    }

    public function create()
    {
        return view('agency.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'agency_manager_name' => 'required',
            'mobile' => 'required',
            'town_id' => 'required',
        ]);
        Agency::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'agency_manager_name' => $request->get('agency_manager_name'),
            'mobile' => $request->get('mobile'),
            'town_id' => $request->get('town_id')
        ]);
        return redirect()->route('agency.index')->with('success', 'agency-created');
    }

    public function edit(Town $town)
    {
        return view('towns.edit', [
            'town' => $town
        ]);
    }

    public function update(Request $request, Town $town)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $town->update([
            'name' => $request->get('name')
        ]);
        return redirect()->route('town.index')->with('success', 'town-updated');
    }

    public function destroy(Town $town)
    {
        $town->delete();
        return redirect()->route('town.index')->with('success', 'town-deleted');
    }
}
