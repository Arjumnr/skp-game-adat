<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Opsi;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OpsiController extends Controller
{
    public function index(Request $request)
    {
        $title  = 'Opsi';
        $data = Opsi::with('getPertanyaan')->get()->sortByDesc('id');
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit "> <button type="button" class="btn rounded-pill btn-icon btn-primary">
                        <span class="tf-icons bx bx-message-square-edit"></span>
                      </button></a>';
                    $btn = $btn . ' <button type="button"  data-id="' . $row->id . '" class="btn rounded-pill btn-icon btn-danger delete">
                    <span class="tf-icons bx bx-trash-alt"></span>
                  </button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $pertanyaan = Pertanyaan::all();
        return view('admin.opsi.index', compact('title', 'pertanyaan'));
    }

    public function getImage($id)
    {
        $data = Pertanyaan::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        try {

            Opsi::updateOrCreate(
                ['id' => $request->data_id],
                [
                    'pertanyaan_id' => $request->pertanyaan_id,
                    'opsi1' => $request->opsi1,
                    'opsi2' => $request->opsi2,
                    'opsi3' => $request->opsi3,
                    'opsi4' => $request->opsi4,
                    'jawaban' => $request->jawaban,
                ]
            );
            return response()->json(['status' => 'success', 'message' => 'Save data successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = Opsi::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        try {
            Opsi::find($id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Data deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
