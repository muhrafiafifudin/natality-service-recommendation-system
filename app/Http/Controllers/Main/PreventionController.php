<?php

namespace App\Http\Controllers\Main;

use App\Models\Prevention;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class PreventionController extends Controller
{
    public function index()
    {
        $preventions = Prevention::all();
        $sub_criterias = SubCriteria::all();

        return view('pages.main.prevention', compact('preventions', 'sub_criterias'));
    }

    public function store(Request $request)
    {
        try {
            $prevention = new Prevention();
            $prevention->sub_criteria_id = $request->sub_criteria_id;
            $prevention->prevention = $request->prevention;
            $prevention->save();

            return redirect()->route('prevention.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('prevention.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $id = Crypt::decrypt($id);

            $prevention = Prevention::findOrFail($id);
            $prevention->sub_criteria_id = $request->sub_criteria_id;
            $prevention->prevention = $request->prevention;
            $prevention->update();

            return redirect()->route('prevention.index')->with(['success' => 'Berhasil Mengubah Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('prevention.index')->with(['error' => 'Gagal Mengubah Data !!']);
        }
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $prevention = Prevention::findOrFail($id);
            $prevention->delete();

            return redirect()->route('prevention.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('prevention.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
