<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::with('kursus')->get();
        return view('materi', ['materiList' => $materi]);
    }
    public function create()
    {
        $kursus = Kursus::all();
        return view('add-materi', ['kursus' => $kursus]);
    }
    // public function store(Request $request)
    // {
    //     //menggunakan cara biasa 

    //     $materi = new Materi;
    //     $materi->kursus_id = $request->kursus_id;
    //     $materi->judul_materi = $request->judul_materi;
    //     $materi->isi = $request->isi;
    //     $materi->save();
    //     return redirect('/materi');
    // }
}
