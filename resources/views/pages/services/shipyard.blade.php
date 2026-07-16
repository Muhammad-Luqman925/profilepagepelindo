@extends('layouts.main')

@section('title', 'Shipyard - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-shipyard-header">
        <div class="container text-center">
            <h1 class="page-header__title">Shipyard (Galangan Kapal)</h1>
            <p class="page-header__subtitle">Perawatan, Perbaikan, dan Fabrikasi Kapal Laut</p>
        </div>
    </div>

    <section class="section-padding bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-primary-dark mb-6 text-2xl">Menjaga Kesiapan Armada Maritim</h2>
                    <p class="text-gray-600 line-height-1.8 mb-4">
                        Kesiapan armada adalah urat nadi logistik laut. Melalui fasilitas <strong>Shipyard</strong>, kami melayani perbaikan dan perawatan (Maintenance, Repair, and Overhaul - MRO) untuk memastikan kapal-kapal pandu, tunda, dan niaga dapat beroperasi secara optimal dan aman.
                    </p>
                    <p class="text-gray-600 line-height-1.8 mb-6">
                        Dikelola oleh tenaga ahli bersertifikasi Biro Klasifikasi Indonesia (BKI), layanan galangan kami menjamin standar kualitas kerja yang tinggi dengan waktu pengerjaan yang efisien.
                    </p>
                    
                    <h3 class="text-secondary mb-4">Layanan Galangan Kapal:</h3>
                    <ul class="list-none p-0">
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Docking Repair:</strong> Perbaikan lambung kapal, pengecatan (sandblasting), dan pemeliharaan konstruksi bawah air.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Engine Overhaul:</strong> Perbaikan dan perawatan rutin mesin induk, mesin bantu, serta sistem propulsi.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Steel Fabrication:</strong> Fabrikasi baja untuk pembuatan komponen pelengkap dan perbaikan struktural pelat kapal.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Electrical & Navigation:</strong> Kalibrasi dan perbaikan sistem kelistrikan, navigasi, dan komunikasi kapal.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1517424151703-4ab26201b1b3?q=80&w=2070&auto=format&fit=crop" alt="Shipyard" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
