<?php

namespace App\Http\Controllers\Contribution;

use App\Http\Controllers\Controller;
use App\Models\Contribution;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BankContributionController extends Controller
{

    public function index()
    {
        $contributions = $contributions = Contribution::paginate(6);
        return view('contribution.bank.index', [
            'contributions' => $contributions
        ]);
    }

    public function search(Request $request)
    {
        if ($request->get('search')) {
            return $this->searchWithUser($request);
        }
        if ($request->get('started_at') || $request->get('ended_at')) {
            return $this->searchWithDates($request);
        }
        return redirect()->route('contribution.bank.index');
    }


    private function searchWithUser(Request $request)
    {
        $user = User::where('name', 'like', '%' . $request->get('search') . '%')
            ->orWhere('username', 'like', '%' . $request->get('search') . '%')
            ->first();
        if ($user) {
            $contributions = Contribution::where('user_id', $user->id)
                ->paginate(6);
            return view('contribution.bank.index', [
                'contributions' => $contributions
            ]);
        }
        return redirect()->route('contribution.bank.index');
    }

    private function searchWithDates(Request $request)
    {
        $started_at = Carbon::parse($request->get('started_at'))->format('Y-m-d H:i:s');
        $ended_at = Carbon::parse($request->get('ended_at'))->format('Y-m-d H:i:s');

        if ($started_at && $ended_at) {
            $contributions = Contribution::query()
                ->whereDate('created_at', '>=', $started_at)
                ->whereDate('created_at', '<=', $ended_at)
                ->paginate(12);
            return view('contribution.bank.index', [
                'contributions' => $contributions
            ]);
        }
        return redirect()->route('contribution.bank.index');
    }
}
