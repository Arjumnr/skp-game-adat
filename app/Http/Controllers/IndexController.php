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

            //pertanyaan with opsi()
            $pertanyaans = Pertanyaan::with('opsi')->where('level', 1)->get()->random(5);

            
            // return response()->json(['pertanyaans' => $pertanyaans]);

            return view('level1', compact('pertanyaans'));
        // }

        
    }

    public function postL1(Request $request){
       
        $score = 0;
       //buat array pertanyaan berdasarka id yang d kirim
       foreach ($request->all() as $key => $value) {
           if (strpos($key, 'q-') !== false) {
               $pertanyaanId[] = $value;
           }
       }

         //buat array jawaban berdasarkan p yang d kirim
            foreach ($request->all() as $key => $value) {
                if (strpos($key, 'p') !== false) {
                    $jawaban[] = $value;
                }
            }

            // dd ($pertanyaanId[2]);

        foreach ($pertanyaanId as $key => $value) {

            $opsi = Opsi::where('pertanyaan_id', $value)->get();

            foreach ($opsi as $key2 => $value2) {
                // dd ($value2->jawaban);
                // dd ($jawaban[$key]);
                $val = $value2->jawaban;
                $getVal = $opsi[0]->$val;
                // dd ($getVal);
                if ($getVal == $jawaban[$key]) {
                    $score += 20;
                }else{
                    $score += 0;
                }
            }
            
        }

        return view('score', compact('score'));
    }

    public function level2(Request $request)
    {
         //pertanyaan with opsi()
         $pertanyaans = Pertanyaan::with('opsi')->where('level', 2)->get()->random(5);

            
         // return response()->json(['pertanyaans' => $pertanyaans]);

         return view('level2', compact('pertanyaans'));
    }

    public function postL2(Request $request){
       
        $score = 0;
       //buat array pertanyaan berdasarka id yang d kirim
       foreach ($request->all() as $key => $value) {
           if (strpos($key, 'q-') !== false) {
               $pertanyaanId[] = $value;
           }
       }

         //buat array jawaban berdasarkan p yang d kirim
            foreach ($request->all() as $key => $value) {
                if (strpos($key, 'p') !== false) {
                    $jawaban[] = $value;
                }
            }

            // dd ($pertanyaanId[2]);

        foreach ($pertanyaanId as $key => $value) {

            $opsi = Opsi::where('pertanyaan_id', $value)->get();

            foreach ($opsi as $key2 => $value2) {
                // dd ($value2->jawaban);
                // dd ($jawaban[$key]);
                $val = $value2->jawaban;
                $getVal = $opsi[0]->$val;
                // dd ($getVal);
                if ($getVal == $jawaban[$key]) {
                    $score += 20;
                }else{
                    $score += 0;
                }
            }
            
        }

        return view('score', compact('score'));
    }

    public function level3(Request $request)
    {
       //pertanyaan with opsi()
       $pertanyaans = Pertanyaan::with('opsi')->where('level', 3)->get()->random(5);

            
       // return response()->json(['pertanyaans' => $pertanyaans]);

       return view('level3', compact('pertanyaans'));
    }

    public function postL3(Request $request){
       
        $score = 0;
       //buat array pertanyaan berdasarka id yang d kirim
       foreach ($request->all() as $key => $value) {
           if (strpos($key, 'q-') !== false) {
               $pertanyaanId[] = $value;
           }
       }

         //buat array jawaban berdasarkan p yang d kirim
            foreach ($request->all() as $key => $value) {
                if (strpos($key, 'p') !== false) {
                    $jawaban[] = $value;
                }
            }

            // dd ($pertanyaanId[2]);

        foreach ($pertanyaanId as $key => $value) {

            $opsi = Opsi::where('pertanyaan_id', $value)->get();

            foreach ($opsi as $key2 => $value2) {
                // dd ($value2->jawaban);
                // dd ($jawaban[$key]);
                $val = $value2->jawaban;
                $getVal = $opsi[0]->$val;
                // dd ($getVal);
                if ($getVal == $jawaban[$key]) {
                    $score += 20;
                }else{
                    $score += 0;
                }
            }
            
        }

        return view('score', compact('score'));
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
