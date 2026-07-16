@extends('layouts.main')

@section('title', 'Port Services - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-port-header">
        <div class="container text-center">
            <h1 class="page-header__title">Port Services</h1>
            <p class="page-header__subtitle">Layanan Utilitas dan Fasilitas Pelabuhan Terintegrasi</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="flex flex-col items-center max-w-900px mx-auto text-center">
                <h2 class="text-primary-dark mb-6 text-2xl">Melayani Kebutuhan Kapal Selama Bersandar</h2>
                <p class="text-gray-600 line-height-1.8 mb-8">
                    Operasional pelabuhan tidak lepas dari kebutuhan utilitas dasar bagi kapal-kapal yang sedang bersandar. <strong>Port Services</strong> hadir untuk memastikan bahwa seluruh kapal mendapatkan pasokan logistik dan layanan pengelolaan lingkungan yang berstandar tinggi.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-8">
                <!-- Service 1 -->
                <div class="flex gap-6 bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex-shrink-0 w-60px h-60px bg-primary-light rounded-xl flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-primary-dark mb-2">Pasokan Air Bersih (Fresh Water)</h3>
                        <p class="text-gray-600 text-sm line-height-1.6">Penyuplai air bersih berkualitas untuk kebutuhan awak kapal dan mesin selama berada di pelabuhan.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="flex gap-6 bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex-shrink-0 w-60px h-60px bg-primary-light rounded-xl flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <div>
                        <h3 class="text-primary-dark mb-2">Pengelolaan Limbah Kapal</h3>
                        <p class="text-gray-600 text-sm line-height-1.6">Layanan penerimaan dan pengelolaan limbah padat maupun cair dari kapal (Reception Facilities) sesuai standar MARPOL.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="flex gap-6 bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex-shrink-0 w-60px h-60px bg-primary-light rounded-xl flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </div>
                    <div>
                        <h3 class="text-primary-dark mb-2">Shore Power Connection</h3>
                        <p class="text-gray-600 text-sm line-height-1.6">Penyediaan aliran listrik dari darat ke kapal (Onshore Power Supply) untuk mengurangi emisi gas buang kapal di pelabuhan.</p>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="flex gap-6 bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="flex-shrink-0 w-60px h-60px bg-primary-light rounded-xl flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                    </div>
                    <div>
                        <h3 class="text-primary-dark mb-2">Keamanan Pelabuhan (ISPS Code)</h3>
                        <p class="text-gray-600 text-sm line-height-1.6">Dukungan pengamanan fasilitas pelabuhan sesuai regulasi internasional perlindungan maritim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
