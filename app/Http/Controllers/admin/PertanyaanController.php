<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PertanyaanController extends Controller
{
    public function index(Request $request)
    {
        $title  = 'Pertanyaan';
        $data = Pertanyaan::all()->sortByDesc('id');
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
        return view('admin.pertanyaan.index', compact('title'));
    }

    public function store(Request $request)
    {
      
        try {

            $validasi = $request->validate([
                'pertanyaan' => 'required',
                'level' => 'required',
                'path_image' => 'required',
            ]);

            if ($validasi == false) {
                return response()->json(['status' => 'error', 'message' => 'Data tidak boleh kosong']);
            }

            if ( $request->file('path_image')) {
                $file =  $request->file('path_image');
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/img/', $name);
            }else{
                return response()->json(['status' => 'error', 'message' => 'File not found.']);
            }
           
                Pertanyaan::updateOrCreate(
                    ['id' => $request->data_id],
                    [
                        'pertanyaan' => $request->pertanyaan,
                        'level' => $request->level,
                        'path_image' => $name,
                    ]

                );
            return response()->json(['status' => 'success', 'message' => 'Save data successfully.']);
            // }
           
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = Pertanyaan::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        try {
            Pertanyaan::find($id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Data deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
