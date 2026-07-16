@extends('layouts.main')

@section('title', 'SPJM Area Kalimantan II - Layanan Kami')

@section('content')
    <div class="page-header bg-services-header">
        <div class="container text-center">
            <h1 class="page-header__title">Layanan Utama Kami</h1>
            <p class="page-header__subtitle">Solusi terintegrasi untuk mendukung aktivitas maritim dan kepelabuhanan</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="flex flex-col gap-12">
                <!-- Marine Services -->
                <div class="grid grid-cols-1-2 gap-8 items-center p-8 bg-white rounded-xl shadow-sm border-l-6 border-primary">
                    <div>
                        <h2 class="text-primary-dark mb-2 text-3xl">Marine Services</h2>
                        <span class="inline-block py-1 px-3 bg-primary-light text-primary rounded-full text-sm font-semibold">Pemanduan & Penundaan</span>
                    </div>
                    <div>
                        <p class="text-gray-600 line-height-1.8">
                            Layanan inti yang memastikan keselamatan navigasi kapal saat masuk maupun keluar perairan pelabuhan. Kami menyediakan jasa kapal pandu (pilotage) dan kapal tunda (towage) dengan standar keselamatan internasional untuk menjamin pergerakan kapal yang aman dan efisien di alur pelayaran yang padat.
                        </p>
                        <a href="{{ route('services.marine') }}" class="navbar__link--btn inline-block mt-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Equipment Services -->
                <div class="grid grid-cols-1-2 gap-8 items-center p-8 bg-white rounded-xl shadow-sm border-l-6 border-accent">
                    <div>
                        <h2 class="text-primary-dark mb-2 text-3xl">Equipment Services</h2>
                        <span class="inline-block py-1 px-3 bg-accent-light text-accent rounded-full text-sm font-semibold">Peralatan Pelabuhan</span>
                    </div>
                    <div>
                        <p class="text-gray-600 line-height-1.8">
                            Penyediaan, penyewaan, serta pemeliharaan peralatan berat kepelabuhanan seperti *Quay Crane*, *Rubber Tyred Gantry (RTG)*, *Reach Stacker*, dan peralatan bongkar muat lainnya. Kami memastikan kesiapan operasional alat (Availability) untuk mencegah terjadinya *delay* dalam proses bongkar muat logistik.
                        </p>
                        <a href="{{ route('services.equipment') }}" class="navbar__link--btn inline-block mt-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Dredging Solution -->
                <div class="grid grid-cols-1-2 gap-8 items-center p-8 bg-white rounded-xl shadow-sm border-l-6 border-secondary">
                    <div>
                        <h2 class="text-primary-dark mb-2 text-3xl">Dredging Solution</h2>
                        <span class="inline-block py-1 px-3 bg-secondary-light text-secondary rounded-full text-sm font-semibold">Pengerukan Alur</span>
                    </div>
                    <div>
                        <p class="text-gray-600 line-height-1.8">
                            Melayani jasa pengerukan alur pelayaran dan kolam pelabuhan untuk mempertahankan tingkat kedalaman optimal laut (Low Water Spring), sehingga kapal berukuran besar (Draft dalam) dapat bersandar dengan aman. Kami juga melayani pengerukan untuk area reklamasi.
                        </p>
                        <a href="{{ route('services.dredging') }}" class="navbar__link--btn inline-block mt-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Port Services -->
                <div class="grid grid-cols-1-2 gap-8 items-center p-8 bg-white rounded-xl shadow-sm border-l-6 border-warning">
                    <div>
                        <h2 class="text-primary-dark mb-2 text-3xl">Port Services</h2>
                        <span class="inline-block py-1 px-3 bg-warning-light text-warning rounded-full text-sm font-semibold">Utilitas Terpadu</span>
                    </div>
                    <div>
                        <p class="text-gray-600 line-height-1.8">
                            Pelayanan utilitas pendukung kapal selama bersandar, meliputi penyediaan *Shore Power Connection* (Listrik dari darat ke kapal untuk mengurangi emisi) serta penyediaan pasokan air bersih yang krusial untuk operasional awak kapal dan logistik pelayaran.
                        </p>
                        <a href="{{ route('services.port') }}" class="navbar__link--btn inline-block mt-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Shipyard -->
                <div class="grid grid-cols-1-2 gap-8 items-center p-8 bg-white rounded-xl shadow-sm border-l-6 border-gray-800">
                    <div>
                        <h2 class="text-primary-dark mb-2 text-3xl">Shipyard</h2>
                        <span class="inline-block py-1 px-3 bg-gray-800-light text-gray-800 rounded-full text-sm font-semibold">Galangan Kapal</span>
                    </div>
                    <div>
                        <p class="text-gray-600 line-height-1.8">
                            Menyediakan fasilitas *Docking* (pemeliharaan rutin) dan perbaikan (*Repair*) kapal. Layanan galangan ini ditujukan untuk merawat armada operasional SPJM maupun menerima layanan perbaikan kapal dari pihak ketiga dengan standar mekanikal dan struktural terbaik.
                        </p>
                        <a href="{{ route('services.shipyard') }}" class="navbar__link--btn inline-block mt-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
