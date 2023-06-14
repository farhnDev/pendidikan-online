<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Kursus;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    //function mengambil relationhsip dari kursus dan pengajar
    public function index()
    {
        $kursus = Kursus::with('pengajar')->get();
        // ->findOrFail('id');
        return view('kursus', ['kursus' => $kursus]);
        // $modelKursus = Kursus::join('pengajar', 'kursus.pengajar_id', '=', 'pengajar.id')
        //     ->get();
        // $data = [
        //     'dataKursus' => $modelKursus
        // ];
        // return view('kursus', $data);
    }

    //ini function melihat id dari materi
    public function show($id)
    {
        $kursus = Kursus::with(['materis'])
            ->find($id);
        return view('kursus-view', ['Kursus' => $kursus]);
        // $modelKursus = Kursus::where('kursus.id', $id)
        //     ->join('materi_kursus', 'kursus.pengajar_id', '=', 'materi_kursus.kursus_id')
        //     ->get();
        // $data = [
        //     'dataKursus' => $modelKursus
        // ];
        // return view('kursus-view', $data);
    }

    //function pendaftaraan 
    public function showPendaftaraan()
    {
        // Ambil data yang diperlukan untuk halaman pendaftaran
        $kursus = Kursus::all();
        // Ambil data lain yang diperlukan

        return view('pendaftaraan', compact('kursus'));
    }

    //ini function create
    public function create()
    {
        $pengajar = Pengajar::all();
        return view('kursus-add', ['guru' => $pengajar]);
    }

    //ini function store
    public function store(Request $request)
    {
        //menggunakan cara biasa 

        $kursus = new Kursus;
        $kursus->judul_kursus = $request->judul_kursus;
        $kursus->tema = $request->tema;
        $kursus->thumbnail = $request->thumbnail;
        $kursus->pengajar_id = $request->pengajar_id;
        $kursus->save();
        return redirect('/kursus');

        // dengan mass asigment,dan sudah sangat singkat, akan tetapi dengan
        // kita harus memberikan ke dalam modelnya dahulu,kolom yang boleh yang disi apa saja
        // $kursus = Kursus::create($request->all());
        // return redirect('/kursus');
    }
}
