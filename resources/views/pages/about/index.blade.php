@extends('layouts.main')

@section('title', 'SPJM Area Kalimantan II - Tentang Kami')

@section('content')
    <div class="page-header bg-about-header">
        <div class="container text-center">
            <h1 class="page-header__title">Tentang Kami</h1>
            <p class="page-header__subtitle">Mengenal lebih dekat profil SPJM Area Kalimantan II</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="grid grid-cols-2 gap-12 mb-12">
                <div>
                    <h2 class="text-primary text-3xl mb-4">Profil Perusahaan</h2>
                    <p class="section-text">
                        Subholding Pelindo Jasa Maritim (SPJM) Area Kalimantan II adalah entitas penting yang bertugas mengelola dan menyediakan layanan pendukung operasional pelabuhan di kawasan perairan Kalimantan. 
                    </p>
                    <p class="section-text">
                        Sebagai bagian dari PT Pelabuhan Indonesia (Persero), kami berkomitmen untuk mewujudkan ekosistem logistik maritim yang terintegrasi, handal, dan berkelas dunia, guna mendukung roda perekonomian nasional khususnya di wilayah Kalimantan Timur.
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm border-l-accent">
                    <h3 class="section-title text-xl mb-4">Visi & Misi</h3>
                    <div class="mb-4">
                        <strong class="text-accent">Visi:</strong>
                        <p class="section-text mt-2">Menjadi pemimpin jasa kemaritiman yang terintegrasi dan berkelas dunia, serta mewujudkan jaringan ekosistem maritim nasional yang handal, efisien, dan tangkas (agile).</p>
                    </div>
                    <div>
                        <strong class="text-accent">Misi:</strong>
                        <ul class="section-text mt-2 pl-4">
                            <li class="mb-2">Menyediakan layanan jasa kemaritiman yang terintegrasi.</li>
                            <li class="mb-2">Mengutamakan keselamatan dan kepuasan pelanggan.</li>
                            <li>Mendukung pertumbuhan ekonomi daerah melalui operasional yang efisien.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Nilai Utama -->
            <div class="bg-white p-12 rounded-2xl shadow-md text-center mt-16">
                <h2 class="section-title text-3xl mb-12">Nilai Utama Kami</h2>
                <div class="grid grid-cols-3 gap-8">
                    <div>
                        <div class="w-60px h-60px bg-primary-light text-primary rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold">1</div>
                        <h4 class="text-xl mb-3">Profesionalisme</h4>
                        <p class="text-gray-500 line-height-1.6">Layanan unggul yang dikelola oleh sumber daya manusia berkompeten dan tersertifikasi di bidang maritim.</p>
                    </div>
                    <div>
                        <div class="w-60px h-60px bg-accent-light text-accent rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold">2</div>
                        <h4 class="text-xl mb-3">Keselamatan (Safety)</h4>
                        <p class="text-gray-500 line-height-1.6">Mengutamakan target *Zero Accident* dalam setiap lini operasi perairan maupun darat.</p>
                    </div>
                    <div>
                        <div class="w-60px h-60px bg-secondary-light text-secondary rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold">3</div>
                        <h4 class="text-xl mb-3">Integritas</h4>
                        <p class="text-gray-500 line-height-1.6">Menjalankan bisnis yang transparan, bersih, dan dapat dipercaya penuh oleh seluruh pemangku kepentingan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
