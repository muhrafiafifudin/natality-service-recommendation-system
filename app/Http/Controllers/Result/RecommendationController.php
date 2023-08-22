<?php

namespace App\Http\Controllers\Result;

use App\Models\User;
use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Models\Recommendation;
use App\Http\Controllers\Controller;
use App\Models\RecommendationDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RecommendationController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());

        $role_id = $user->roles()->pluck('id');
        $role_id = $role_id[0];

        $criterias = Criteria::all();

        if ($role_id == 1) {
            $recommendations = Recommendation::all();
        } else {
            $recommendations = Recommendation::where('user_id', $user->id)->get();
        }

        return view('pages.result.recommendation', compact('criterias', 'recommendations'));
    }

    public function store(Request $request)
    {
        try {
            $score_total = [];

            $recommendation = new Recommendation();
            $recommendation->user_id = Auth::user()->id;
            $recommendation->save();

            foreach ($request->criteria as $key => $value) {
                $criteria_id = explode('_', $key);
                $criteria_id = $criteria_id[1];

                $recommendation_detail = new RecommendationDetail();
                $recommendation_detail->recommendation_id = $recommendation->id;
                $recommendation_detail->criteria_id = $criteria_id;
                $recommendation_detail->result = $value;
                $recommendation_detail->save();

                $criteria = Criteria::findOrFail($criteria_id);
                $criteria = $criteria->score;

                if ($value == 'Ya') {
                    $score_total[] = $criteria;
                }
            }

            $recommendation->result = array_sum($score_total);
            $recommendation->update();

            return redirect()->route('recommendation.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('recommendation.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $criteria = Recommendation::findOrFail($id);
            $criteria->delete();

            return redirect()->route('recommendation.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('recommendation.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
