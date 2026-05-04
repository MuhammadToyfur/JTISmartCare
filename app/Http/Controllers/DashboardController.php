<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // Data sementara agar view tidak error
        $latestDiagnosis = null;
        $totalDiagnosis = 0;
        $riwayat = [];
        $articles = [];

        return view('dashboard.index', compact('user', 'latestDiagnosis', 'totalDiagnosis', 'riwayat', 'articles'));
    }
}
