@extends('layouts.main')

@section('title', 'Komisaris - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-commissioners-header">
        <div class="container text-center">
            <h1 class="page-header__title">Dewan Komisaris</h1>
            <p class="page-header__subtitle">Pengawasan strategis demi pertumbuhan berkelanjutan</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="grid grid-cols-auto-fit gap-8 max-w-1200px mx-auto">
                
                <!-- Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md text-center">
                    <div class="h-300px bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('storage/Komisaris_OTTO_ARDIANTO.png') }}" alt="OTTO ARDIANTO" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-6">
                        <h3 class="text-primary-dark mb-1">OTTO ARDIANTO</h3>
                        <p class="text-accent font-semibold text-sm mb-4">Komisaris Utama</p>
                        <p class="text-gray-600 text-sm line-height-1.6">Pemimpin tertinggi dalam Dewan Komisaris yang bertugas mengawasi kebijakan pengurusan dan jalannya kelangsungan usaha SPJM secara umum serta memberikan masukan kepada jajaran direksi.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md text-center">
                    <div class="h-300px bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500">[Foto Komisaris 2]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-primary-dark mb-1">NEIL ISKANDAR DAULAY</h3>
                        <p class="text-accent font-semibold text-sm mb-4">Komisaris</p>
                        <p class="text-gray-600 text-sm line-height-1.6">Anggota Dewan Komisaris yang berfungsi melakukan pengawasan, meninjau perkembangan operasional, serta ikut memastikan tata kelola perusahaan berjalan sesuai dengan regulasi yang berlaku.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md text-center">
                    <div class="h-300px bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500">[Foto Komisaris 3]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-primary-dark mb-1">ACHMAD IDRUS</h3>
                        <p class="text-accent font-semibold text-sm mb-4">Komisaris</p>
                        <p class="text-gray-600 text-sm line-height-1.6">Bertanggung jawab atas pengelolaan kesehatan finansial perusahaan, penganggaran, investasi, serta merancang sistem mitigasi risiko untuk menjaga stabilitas bisnis SPJM dari dinamika pasar.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md text-center">
                    <div class="h-300px bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500">[Foto Komisaris 4]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-primary-dark mb-1">ERIS HERRYANTO</h3>
                        <p class="text-accent font-semibold text-sm mb-4">Komisaris Independen</p>
                        <p class="text-gray-600 text-sm line-height-1.6">Anggota komisaris yang bertindak secara independen dari pengaruh pihak lain demi menjaga objektivitas, kepatuhan, serta melindungi kepentingan seluruh pemangku kepentingan (stakeholders).</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
