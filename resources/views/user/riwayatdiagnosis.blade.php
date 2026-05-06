@extends('app')

@section('title', 'Riwayat Diagnosis')

@section('content')

<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header h1 {
        color: #2c4f68;
    }

    .date {
        background: #ddd;
        padding: 8px 14px;
        border-radius: 10px;
        font-size: 14px;
    }

    .subtitle {
        margin-top: 8px;
        color: #666;
        margin-bottom: 25px;
    }

    .card-custom {
        background: white;
        padding: 70px 40px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }

    .icon {
        font-size: 80px;
        margin-bottom: 20px;
    }

    .btn-custom {
        background: #3b6ef5;
        color: white;
        padding: 14px 28px;
        border: none;
        border-radius: 10px;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        background: #2c5be0;
        color: white;
    }
</style>

<div class="header">
    <h1>Riwayat Diagnosis</h1>
    <span class="date">{{ now()->locale('id')->isoFormat('D MMMM Y') }}</span>
</div>

<p class="subtitle">
    Lihat dan pantau perkembangan burnout Anda dari waktu ke waktu.
</p>

<div class="card-custom">
    <div class="icon">📋</div>

    <h2>Belum Ada Riwayat Diagnosis</h2>

    <p>
        Anda belum pernah melakukan diagnosis burnout.<br>
        Mulai dengan mengisi kuesioner untuk mengetahui kondisi Anda.
    </p>

    <a href="{{ route('diagnosis.form') }}" class="btn-custom">
        Isi Kuesioner Sekarang
    </a>
</div>

@endsection