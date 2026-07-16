@extends('layouts.main')

@section('title', 'Struktur Organisasi - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-structure-header">
        <div class="container text-center">
            <h1 class="page-header__title">Struktur Organisasi</h1>
            <p class="page-header__subtitle">Bagan tata kelola organisasi SPJM Area Kalimantan II</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container text-center">
            <div class="bg-white p-8 rounded-2xl shadow-md max-w-xl mx-auto">
                <h2 class="section-title mb-8">Struktur Organisasi Area Kalimantan II</h2>
                
                <!-- Placeholder untuk Bagan Struktur -->
                <div class="w-full mb-8">
                    <img src="{{ asset('storage/Struktur spjm.png') }}" alt="Bagan Struktur Organisasi SPJM Area Kalimantan II" class="img-fluid rounded-lg shadow-sm border-gray-200">
                    <p class="text-gray-500 text-sm mt-4 italic">*Bagan resmi struktur organisasi PT Pelindo Jasa Maritim Area Kalimantan II</p>
                </div>
                
                <div class="mt-8 text-left">
                    <p class="text-gray-600 line-height-1.8">Struktur organisasi SPJM Area Kalimantan II dirancang untuk beroperasi secara tangkas (agile) dalam mendukung kelancaran operasional unit layanan di lapangan, dengan alur koordinasi vertikal dan horizontal yang jelas antara manajemen pusat dan manajemen operasional di Kalimantan.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
