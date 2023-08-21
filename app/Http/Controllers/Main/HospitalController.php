<?php

namespace App\Http\Controllers\Main;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();

        return view('pages.main.hospital', compact('hospitals'));
    }

    public function store(Request $request)
    {
        try {
            $hospital = new Hospital();
            $hospital->hospital = $request->hospital;
            $hospital->save();

            return redirect()->route('hospital.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('hospital.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $id = Crypt::decrypt($id);

            $hospital = Hospital::findOrFail($id);
            $hospital->hospital = $request->hospital;
            $hospital->update();

            return redirect()->route('hospital.index')->with(['success' => 'Berhasil Mengubah Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('hospital.index')->with(['error' => 'Gagal Mengubah Data !!']);
        }
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $hospital = Hospital::findOrFail($id);
            $hospital->delete();

            return redirect()->route('hospital.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('hospital.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
