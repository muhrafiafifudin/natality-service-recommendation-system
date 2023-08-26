<?php

namespace App\Http\Controllers\Main;

use App\Models\Disease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::all();

        return view('pages.main.disease', compact('diseases'));
    }

    public function store(Request $request)
    {
        try {
            $disease = new Disease();
            $disease->disease = $request->disease;
            $disease->save();

            return redirect()->route('disease.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('disease.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $id = Crypt::decrypt($id);

            $disease = Disease::findOrFail($id);
            $disease->disease = $request->disease;
            $disease->update();

            return redirect()->route('disease.index')->with(['success' => 'Berhasil Mengubah Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('disease.index')->with(['error' => 'Gagal Mengubah Data !!']);
        }
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $disease = Disease::findOrFail($id);
            $disease->delete();

            return redirect()->route('disease.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('disease.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
