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
}
