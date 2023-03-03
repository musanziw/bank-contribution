<?php

namespace App\Http\Controllers\Contribution;

use App\Http\Controllers\Controller;
use App\Models\Contribution;
use Auth;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index()
    {

        $contributions = Contribution::where('agency_id', Auth::user()->agency->id)->paginate(12);
        return view('contribution.index', [
            'contributions' => $contributions
        ]);
    }
}
