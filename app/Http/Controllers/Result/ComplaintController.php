<?php

namespace App\Http\Controllers\Result;

use App\Models\Disease;
use App\Models\Criteria;
use App\Models\Complaint;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        $criterias = Criteria::with('sub_criterias')->get();

        return view('pages.result.complaint', compact('complaints', 'criterias'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        try {
            $complaint = new Complaint();
            $complaint->user_id = Auth::user()->id;
            $complaint->disease_id = $request->disease_id;
            $complaint->description = $request->description;
            $complaint->save();

            return redirect()->route('complaint.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('complaint.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $complaint = Complaint::findOrFail($id);
            $complaint->delete();

            return redirect()->route('complaint.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('complaint.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
