<?php

namespace App\Http\Controllers\Result;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecommendationController extends Controller
{
    public function index()
    {
        $criterias = Criteria::all();

        return view('pages.result.recommendation', compact('criterias'));
    }

    public function store(Request $request)
    {
        $score_total = [];

        foreach ($request->criteria as $key => $value) {
            $criteria_id = explode('_', $key);
            $criteria_id = $criteria_id[1];

            $criteria = Criteria::findOrFail($criteria_id);
            $criteria = $criteria->score;

            $score_total += $criteria->score;
        }

        dd($score_total);
    }
}
