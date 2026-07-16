@extends('layouts.main')

@section('title', 'Marine Services - SPJM Area Kalimantan II')

@section('content')
    <!-- Header Section -->
    <div class="page-header bg-marine-header">
        <div class="container text-center">
            <h1 class="page-header__title">Marine Services</h1>
            <p class="page-header__subtitle">Layanan Pemanduan dan Penundaan Kapal Berstandar Internasional</p>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section-padding bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-primary-dark mb-6 text-2xl">Solusi Navigasi Maritim Terpadu</h2>
                    <p class="text-gray-600 line-height-1.8 mb-4">
                        Sebagai tulang punggung layanan maritim di Kalimantan Timur, **Marine Services** kami dirancang untuk memastikan keselamatan, efisiensi, dan kelancaran arus lalu lintas kapal di pelabuhan maupun wilayah perairan pandu luar biasa.
                    </p>
                    <p class="text-gray-600 line-height-1.8 mb-6">
                        Didukung oleh armada kapal pandu dan tunda (tugboat) modern serta Sumber Daya Manusia (Pandu) yang highly certified, kami mampu melayani berbagai jenis kapal mulai dari kargo umum, tongkang batubara, hingga kapal tanker raksasa.
                    </p>
                    
                    <h3 class="text-secondary mb-4">Cakupan Layanan Kami:</h3>
                    <ul class="list-none p-0">
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Pemanduan (Pilotage):</strong> Pemanduan alur sungai, selat, dan pelabuhan.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Penundaan (Towage):</strong> Bantuan manuver kapal bersandar dan lepas sandar.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Ship-to-Ship (STS) Transfer:</strong> Layanan pandu untuk aktivitas bongkar muat antar kapal di area Muara Berau dan Muara Jawa.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1541427468627-a89a96e5ca1d?q=80&w=2070&auto=format&fit=crop" alt="Marine Services" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
