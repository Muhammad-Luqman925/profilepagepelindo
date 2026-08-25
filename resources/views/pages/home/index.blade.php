@extends('layouts.main')

@section('title', 'SPJM Area Kalimantan II - Beranda')

@push('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
@endpush

@section('content')
    <!-- Hero Section -->
    <section id="beranda" class="hero">
        <div class="hero__overlay"></div>
        
        <!-- Floating Glassmorphism Elements (Background) -->
        <div class="hero__glass-element hero__glass-element--1 hide-mobile">
            <div class="glass-icon">⚓</div>
            <div>
                <strong>Operasional 24/7</strong>
                <span>Layanan Tanpa Henti</span>
            </div>
        </div>
        <div class="hero__glass-element hero__glass-element--2 hide-mobile">
            <div class="glass-icon">🚢</div>
            <div>
                <strong>Marine Services</strong>
                <span>Pandu & Tunda</span>
            </div>
        </div>
        <div class="hero__glass-element hero__glass-element--3 hide-mobile">
            <div class="glass-icon">🌊</div>
            <div>
                <strong>Cakupan Luas</strong>
                <span>Kalimantan Timur</span>
            </div>
        </div>

        <div class="container relative" style="z-index: 10;">
            <div class="hero__content text-center mx-auto">
                <div class="hero__badge">
                    <span class="badge-dot"></span> Pelindo Jasa Maritim
                </div>
                <h1 class="hero__title">SPJM Regional Area <br/><span class="text-gradient">Kalimantan II</span></h1>
                <p class="hero__subtitle">Menghadirkan keunggulan layanan jasa maritim terintegrasi dengan standar global untuk kelancaran logistik di perairan Kalimantan.</p>
                <div class="hero__actions">
                    <a href="{{ route('services.index') }}" class="btn-premium btn-premium--primary">
                        <span>Jelajahi Layanan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="#wilayah-operasi" class="btn-premium btn-premium--glass">
                        <span>Peta Wilayah</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 7 8 11.7z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="hero__scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="scroll-text">Scroll ke bawah</div>
        </div>

        <!-- Animated Wave Divider -->
        <div class="hero__wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Quick Glance -->
    <div class="container quick-glance">
        <div class="quick-glance__grid">
            <div class="stat-card">
                <span class="stat-card__number">4+</span>
                <span class="stat-card__label">Unit Layanan Utama</span>
            </div>
            <div class="stat-card">
                <span class="stat-card__number">Kalimantan</span>
                <span class="stat-card__label">Cakupan Wilayah</span>
            </div>
            <div class="stat-card">
                <span class="stat-card__number">5</span>
                <span class="stat-card__label">Klaster Fokus Layanan</span>
            </div>
        </div>
    </div>

    <!-- Pengenalan SPJM Section -->
    <section class="section-padding section-white">
        <div class="container">
            <div class="section-grid" style="align-items: center;">
                <div style="padding-right: 2rem;">
                    <div><span class="badge-tag">Mengenal Perusahaan</span></div>
                    <h2 class="section-header__title" style="text-align: left; margin-bottom: 1.5rem;">Apa itu Pelindo Jasa Maritim (SPJM)?</h2>
                    <p class="section-text" style="font-size: 1.1rem; line-height: 1.8; color: var(--color-gray-700);">
                        <strong>PT Pelindo Jasa Maritim (SPJM)</strong> adalah salah satu <em>Subholding</em> dari PT Pelabuhan Indonesia (Persero) yang dibentuk pasca-merger Pelindo. Kami hadir sebagai wujud transformasi untuk menstandardisasi dan meningkatkan efisiensi layanan pendukung kepelabuhanan di seluruh Nusantara.
                    </p>
                    <p class="section-text mb-6" style="font-size: 1.1rem; line-height: 1.8; color: var(--color-gray-600);">
                        Fokus bisnis kami membentang luas mulai dari layanan kepanduan dan penundaan kapal (Marine Services), penyediaan alat pelabuhan (Equipment), jasa pengerukan alur (Dredging), pengelolaan utilitas pelabuhan (Port Services), hingga galangan kapal (Shipyard).
                    </p>
                    <div class="flex items-center gap-4 pt-6" style="border-top: 1px solid var(--color-gray-200);">
                        <img src="{{ asset('storage/pt_pelindo_jasa_maritim_remove.png') }}" alt="Logo SPJM" class="img-contain" style="height: 50px;">
                        <div style="border-left: 1px solid var(--color-gray-300); padding-left: 1rem;">
                            <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: var(--color-gray-500); font-weight: 700; display: block;">Subholding of</span>
                            <strong style="color: var(--color-primary-dark); font-size: 1.1rem;">Pelindo</strong>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-xl relative" style="border: 1px solid rgba(0,0,0,0.05); transform: translateY(-5px); transition: transform 0.4s ease;">
                    <img src="{{ asset('storage/port_operation.png') }}" alt="Operasional SPJM" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="absolute bottom-0 left-0 right-0 p-8" style="background: linear-gradient(to top, rgba(10, 82, 107, 0.95), rgba(10, 82, 107, 0.7) 60%, transparent);">
                        <p class="mb-1 font-bold text-2xl color-white">Pusat Keunggulan Jasa Maritim</p>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.95rem; margin-bottom: 0;">Menstandarisasi operasi maritim kelas dunia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Tentang Kami Section -->
    <section class="section-padding section-light" style="position: relative; overflow: hidden; background-color: #f8fafc;">
        <!-- Decorative bg elements -->
        <div style="position: absolute; top: -10%; right: -5%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(0, 124, 186, 0.08) 0%, transparent 70%); border-radius: 50%;"></div>
        <div style="position: absolute; bottom: -10%; left: -5%; width: 300px; height: 300px; background: radial-gradient(circle, rgba(46, 184, 172, 0.08) 0%, transparent 70%); border-radius: 50%;"></div>
        
        <div class="container relative" style="z-index: 10;">
            <div class="section-header">
                <div><span class="badge-tag">Tentang Kami</span></div>
                <h2 class="section-header__title">Profil Area Kalimantan II</h2>
                <p class="section-header__subtitle">Mengenal lebih dekat operasional SPJM di perairan Kalimantan Timur</p>
            </div>
            
            <div class="about-highlight-card">
                <div class="text-center mx-auto" style="max-width: 800px;">
                    <p class="section-text mb-8 text-lg" style="color: var(--color-gray-600); line-height: 1.8;">
                        Sebagai garda terdepan layanan pendukung operasional pelabuhan di Area II, kami mengelola dan memastikan kelancaran logistik maritim yang meliputi wilayah Kalimantan Timur hingga area strategis lainnya dengan mengedepankan profesionalisme, keselamatan, dan integritas.
                    </p>
                    <a href="{{ route('about') }}" class="btn-premium btn-premium--primary">
                        <span>Baca Selengkapnya Profil Area II</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Operasional Wilayah Section (Interactive Map Dashboard) -->
    <section id="wilayah-operasi" class="section-padding section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-header__title">Peta Operasional Wilayah Kalimantan II</h2>
                <p class="section-header__subtitle">Jangkauan layanan logistik maritim strategis di perairan Kalimantan Timur</p>
            </div>
            
            <div class="map-dashboard--alt">
                <!-- Sidebar (Filters & Info) -->
                <div class="map-sidebar">
                    <div class="map-filters-alt">
                        <h3 class="filters-title">Pencarian Fasilitas</h3>
                        <div class="filter-group-alt">
                            <label for="filter-wilayah">Wilayah Operasi</label>
                            <select id="filter-wilayah">
                                <option value="all">Semua Wilayah</option>
                                <option value="samarinda">Unit Samarinda</option>
                                <option value="bontang">Unit Bontang</option>
                                <option value="sangkulirang">Unit Sangkulirang - Sangatta</option>
                                <option value="tanjungsantan">Unit Indominco - Tanjung Santan</option>
                            </select>
                        </div>
                        <div class="filter-group-alt">
                            <label for="filter-zona">Zona Spesifik</label>
                            <select id="filter-zona" disabled>
                                <option value="all">Semua Zona</option>
                            </select>
                        </div>
                        <button id="btn-reset-map" class="btn-reset-alt">Reset Peta</button>
                    </div>
                    
                    <div class="map-info-panel-alt">
                        <div class="info-panel-header-alt">
                            <span id="data-counter">0</span> Fasilitas Ditemukan
                        </div>
                        <div id="cards-container" class="cards-scroll-area-alt">
                            <!-- Cards dimuat oleh JS -->
                        </div>
                    </div>
                </div>

                <!-- Map Container -->
                <div class="map-container-alt">
                    <div id="operational-map" class="w-full h-full"></div>
                </div>
            </div>
            
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Map Dashboard JS -->
    <script src="{{ asset('assets/js/home-map.js') }}"></script>
@endpush
