<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $jumlahPertanyaan = \App\Models\Pertanyaan::count();
        return view('admin.index', compact('title', 'jumlahPertanyaan'));
    }
}
