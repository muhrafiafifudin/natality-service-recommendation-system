<?php

namespace App\Http\Controllers\Result;

use App\Models\Disease;
use App\Models\Criteria;
use App\Models\Complaint;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use App\Models\ComplaintDetail;
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
        try {
            $complaint = new Complaint();
            $complaint->user_id = Auth::user()->id;
            $complaint->description = $request->description;
            $complaint->save();

            foreach ($request->sub_criteria as $value) {
                $complaint_detail = new ComplaintDetail();
                $complaint_detail->complaint_id = $complaint->id;
                $complaint_detail->sub_criteria_id = $value;
                $complaint_detail->save();
            }

            return redirect()->route('complaint.index')->with(['success' => 'Berhasil Menambahkan Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('complaint.index')->with(['error' => 'Gagal Menambahkan Data !!']);
        }
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);

        $complaint = Complaint::with('complaint_details')->where('id', $id)->first();

        return view('pages.result.complaint_detail', compact('complaint'));
    }

    public function destroy($id)
    {

        try {
            $id = Crypt::decrypt($id);

            $complaint = Complaint::findOrFail($id);
            $complaint->delete();

            $complaint_detail = ComplaintDetail::where('complaint_id', $complaint->id)->get();
            ComplaintDetail::destroy($complaint_detail);

            return redirect()->route('complaint.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('complaint.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
