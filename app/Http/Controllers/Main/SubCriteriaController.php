<?php

namespace App\Http\Controllers\Main;

use App\Models\Criteria;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class SubCriteriaController extends Controller
{
    public function index()
    {
        $criterias = Criteria::all();
        $sub_criterias = SubCriteria::all();

        return view('pages.main.sub_criteria', compact('criterias', 'sub_criterias'));
    }

    public function store(Request $request)
    {
        try {
            $sub_criteria = new SubCriteria();
            $sub_criteria->criteria_id = $request->criteria_id;
            $sub_criteria->sub_criteria = $request->sub_criteria;
            $sub_criteria->save();

            return redirect()->route('sub-criteria.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('sub-criteria.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $id = Crypt::decrypt($id);

            $sub_criteria = SubCriteria::findOrFail($id);
            $sub_criteria->criteria_id = $request->criteria_id;
            $sub_criteria->sub_criteria = $request->sub_criteria;
            $sub_criteria->update();

            return redirect()->route('sub-criteria.index')->with(['success' => 'Berhasil Mengubah Data !!']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('sub-criteria.index')->with(['error' => 'Gagal Mengubah Data !!']);
        }
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $sub_criteria = SubCriteria::findOrFail($id);
            $sub_criteria->delete();

            return redirect()->route('sub-criteria.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('sub-criteria.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
