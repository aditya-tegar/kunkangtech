@extends('adminlte.layouts.app')

@section('title', 'Visi Misi')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Visi Misi PT. KUM KANG TECH INDONESIA</h3>
        {{-- {{Auth::user()->role}} --}}
        @if (Auth::user()->role_id == 1)
            
        @endif
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="text-center">
        <h4>Visi</h4>
        <p style="font-size: 20px">Visi perusahaan adalah perusahaan dagang yang kompetitif, berkualitas, berkompetisi serta menguasai sumber dan jaringan didalam dan di luar negeri</p> <br/>
        <br/>
        <h4>Misi</h4>
        <p style="font-size: 20px">Misinya adalah melakukan perdagangan dengan kualitas baik dengan transaksi lokal maupun lintas Negara dan memenuhi seluruh harapan  pelanggan.</p>
        </div>
        
    </div>
</div>
@endsection