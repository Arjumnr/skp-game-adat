<?php

namespace App\Http\Controllers;

use App\Models\Opsi;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        
        if ($request->session()->has('username')) {
            return redirect()->route('optionMulai');
        }
        return view('username');
    }

    public function optionMulai(){
        // dd (session()->all());
        if (!session()->has('username')) {
            return view('username');
        }

        return view('index');
    }

    public function postUsername(Request $request)
    {
        session()->put('username', $request->username);
        // dd (session()->all());
        return redirect()->route('optionMulai');
    }

    public function exit(Request $request)
    {
        $request->session()->forget('username');
        return redirect()->route('index');
    }

    public function level(Request $request)
    {
       
       return view('level');
    }

    public function level1(Request $request)
    {
        //kirim 5 pertanyaan random
        $jumlahPertanyaan = Pertanyaan::all()->count();

        $opsi = Opsi::all();
        $pertanyaan = Pertanyaan::inRandomOrder()->limit($jumlahPertanyaan)->get();

            foreach ($opsi as $key => $value) {
                if ($value->jawaban == 'opsi1') {
                    $opsi[$key]['answer'] = $value->opsi1;
                } elseif ($value->jawaban == 'opsi2') {
                    $opsi[$key]['answer'] = $value->opsi2;
                } elseif ($value->jawaban == 'opsi3') {
                    $opsi[$key]['answer'] = $value->opsi3;
                } elseif ($value->jawaban == 'opsi4') {
                    $opsi[$key]['answer'] = $value->opsi4;
                }
            }


        if ($jumlahPertanyaan < 5) {

            foreach ($pertanyaan as $key => $value) {
                $pertanyaan[$key]['opsi'] = $opsi->where('pertanyaan_id', $value->id);
            }
           
            // return response()->json(['pertanyaan' => $pertanyaan]);

            return view('level1', compact('pertanyaan'));
        } else {

            foreach ($pertanyaan->random(5) as $key => $value) {
                $pertanyaan[$key]['opsi'] = $opsi->where('pertanyaan_id', $value->id)->random(5);
            }
        }

        
    }

    public function level2(Request $request)
    {
       
       return view('level2');
    }

    public function level3(Request $request)
    {
       
       return view('level3');
    }

    public function back(Request $request)
    {
       return view('index');
    }

    public function score(Request $request)
    {
       return view('score');
    }
}
