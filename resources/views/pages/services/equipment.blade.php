@extends('layouts.main')

@section('title', 'Equipment Services - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-equipment-header">
        <div class="container text-center">
            <h1 class="page-header__title">Equipment Services</h1>
            <p class="page-header__subtitle">Penyediaan dan Pemeliharaan Alat Berat Kepelabuhanan</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="flex flex-col items-center max-w-900px mx-auto text-center">
                <h2 class="text-primary-dark mb-6 text-2xl">Dukungan Utilitas Pelabuhan Handal</h2>
                <p class="text-gray-600 line-height-1.8 mb-8">
                    Kecepatan bongkar muat adalah kunci efisiensi logistik. Melalui unit bisnis <strong>Equipment Services</strong>, kami menyewakan, mengoperasikan, dan melakukan pemeliharaan (maintenance) atas alat berat pelabuhan (Port Equipment) berkinerja tinggi di wilayah Kalimantan Timur.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-8 mt-8">
                <!-- Card 1 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm">
                    <div class="w-60px h-60px bg-primary-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <h3 class="text-primary-dark mb-2">Sewa Alat Berat</h3>
                    <p class="text-gray-600 text-sm">Penyediaan alat berat logistik seperti Forklift, Reach Stacker, Mobile Crane, hingga Excavator.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm">
                    <div class="w-60px h-60px bg-primary-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3 class="text-primary-dark mb-2">Pemeliharaan Terjadwal</h3>
                    <p class="text-gray-600 text-sm">Layanan preventif dan korektif untuk memastikan kesiapan alat berat (Zero Downtime).</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm">
                    <div class="w-60px h-60px bg-primary-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </div>
                    <h3 class="text-primary-dark mb-2">Suku Cadang</h3>
                    <p class="text-gray-600 text-sm">Penyediaan spare-parts orisinil dan utilitas teknis operasional pelabuhan lainnya.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
