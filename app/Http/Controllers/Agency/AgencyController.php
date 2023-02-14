<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Town;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::paginate(6);
        return view('agency.index', [
            'agencies' => $agencies
        ]);
    }

    public function create()
    {
        $towns = Town::all();
        return view('agency.create', [
            'towns' => $towns
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('agencies')],
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

    public function edit(Agency $agency)
    {
        $towns = Town::all();
        return view('agency.edit', [
            'agency' => $agency,
            'towns' => $towns
        ]);
    }

    public function update(Request $request, Agency $agency)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'agency_manager_name' => 'required',
            'mobile' => 'required',
            'town_id' => 'required',
        ]);
        $agency->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'agency_manager_name' => $request->get('agency_manager_name'),
            'mobile' => $request->get('mobile'),
            'town_id' => $request->get('town_id')
        ]);
        return redirect()->route('agency.index')->with('success', 'agency-updated');
    }

    public function destroy(Agency $agency)
    {
        $agency->delete();
        return redirect()->route('agency.index')->with('success', 'agency-deleted');
    }
}

