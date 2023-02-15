<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::paginate(5);
        return view('towns.index', [
            'towns' => $towns
        ]);
    }

    public function create()
    {
        return view('towns.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Town::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('town.index')->with('success', 'town-created');
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
        $town->agencies()->delete();
        $town->delete();
        return redirect()->route('town.index')->with('success', 'town-deleted');
    }
}
