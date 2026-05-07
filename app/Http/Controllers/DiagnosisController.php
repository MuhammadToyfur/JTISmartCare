<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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

        // hitung total skor
        $total = array_sum($jawaban);

        // simpan ke session + waktu diagnosis
        session([
            'total_skor' => $total,
            'jawaban'    => $jawaban,
            'waktu'      => now() // ← TAMBAHAN PENTING
        ]);

        return redirect()->route('diagnosis.hasil');
    }

    // tampilkan hasil
    public function hasil()
    {
        $total   = session('total_skor');
        $jawaban = session('jawaban');
        $waktu   = session('waktu');

        // jaga-jaga kalau session kosong
        if (!$total || !$jawaban) {
            return redirect()->route('diagnosis.form');
        }

        return view('user.hasildiagnosis', [
            'jawaban' => $jawaban,
            'total'   => $total,
            'waktu'   => $waktu
        ]);
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