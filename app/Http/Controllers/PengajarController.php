<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {

        $pengajar = Pengajar::with('kursus')->get();
        return view('pengajar', ['pengajarList' => $pengajar]);
    }
}
