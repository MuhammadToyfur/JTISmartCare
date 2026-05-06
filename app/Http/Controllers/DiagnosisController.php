<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    // tampilkan form
    public function form()
    {
        return view('user.isikuesioner');
    }

    // proses jawaban
    public function proses(Request $request)
    {
        $jawaban = $request->jawaban;

        // sementara cek dulu
        dd($jawaban);

        // nanti:
        // hitung skor
        // simpan ke DB
        // redirect ke hasil
    }

    // (opsional, biar ga error kalau diakses)
    public function hasil($id)
    {
        return "Halaman hasil ID: " . $id;
    }

    public function rekomendasi($id)
    {
        return "Halaman rekomendasi ID: " . $id;
    }

    public function exportPdf($id)
    {
        return "Export PDF ID: " . $id;
    }
}
