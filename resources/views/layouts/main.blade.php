<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SPJM Area Kalimantan II - Pelindo Jasa Maritim')</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('storage/Logo-tools.jpg') }}">
    
    <!-- Meta SEO -->
    <meta name="description" content="Profil Subholding Pelindo Jasa Maritim (SPJM) Area Kalimantan II. Melayani Marine, Equipment, Dredging, Port Services, dan Shipyard.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container navbar__container">
            <a href="{{ url('/') }}" class="navbar__brand">
                <img src="{{ asset('storage/pt_pelindo_jasa_maritim_remove.png') }}" alt="Pelindo Jasa Maritim" style="height: 50px; width: auto; object-fit: contain; max-width: 250px;">
            </a>
            <button class="navbar__toggle" id="navbar-toggle" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="navbar__menu" id="navbar-menu">
                <li class="navbar__item"><a href="{{ route('home') }}" class="navbar__link">Beranda</a></li>
                <li class="navbar__item navbar__item--dropdown">
                    <a href="#" class="navbar__link">Profil ▾</a>
                    <ul class="navbar__dropdown">
                        <li class="navbar__dropdown-item navbar__dropdown-item--has-sub">
                            <a href="#" class="navbar__dropdown-link">Manajemen</a>
                            <ul class="navbar__sub-dropdown">
                                <li><a href="{{ route('profile.commissioners') }}" class="navbar__dropdown-link">Komisaris</a></li>
                                <li><a href="{{ route('profile.directors') }}" class="navbar__dropdown-link">Direksi</a></li>
                            </ul>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="{{ route('profile.structure') }}" class="navbar__dropdown-link">Struktur Organisasi</a>
                        </li>
                    </ul>
                </li>
                <li class="navbar__item"><a href="{{ route('about') }}" class="navbar__link">Tentang Kami</a></li>
                <li class="navbar__item navbar__item--dropdown">
                    <a href="{{ route('services.index') }}" class="navbar__link">Layanan ▾</a>
                    <ul class="navbar__dropdown">
                        <li class="navbar__dropdown-item"><a href="{{ route('services.marine') }}" class="navbar__dropdown-link">Marine Services</a></li>
                        <li class="navbar__dropdown-item"><a href="{{ route('services.equipment') }}" class="navbar__dropdown-link">Equipment Services</a></li>
                        <li class="navbar__dropdown-item"><a href="{{ route('services.dredging') }}" class="navbar__dropdown-link">Dredging Solution</a></li>
                        <li class="navbar__dropdown-item"><a href="{{ route('services.port') }}" class="navbar__dropdown-link">Port Services</a></li>
                        <li class="navbar__dropdown-item"><a href="{{ route('services.shipyard') }}" class="navbar__dropdown-link">Shipyard</a></li>
                    </ul>
                </li>
                <li class="navbar__item"><a href="{{ route('home') }}#wilayah-operasi" class="navbar__link">Wilayah Operasi</a></li>
                <li class="navbar__item"><a href="{{ route('contact') }}" class="navbar__link">Hubungi Kami</a></li>
                <li class="navbar__item portal-login-item">
                    <a href="#" id="portalLoginBtn" class="navbar__link navbar__link--btn portal-login-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                        Portal Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer" id="kontak">
        <div class="container footer__container">
            <div class="footer__about">
                <h3>SPJM Area Kalimantan II</h3>
                <p>Mendukung Ekosistem Maritim Terintegrasi di Jantung Kalimantan. Bagian dari PT Pelabuhan Indonesia (Persero).</p>
            </div>
            <div class="footer__links">
                <h4>Layanan Utama</h4>
                <ul>
                    <li>Marine Services</li>
                    <li>Equipment Services</li>
                    <li>Dredging Solution</li>
                    <li>Port Services</li>
                    <li>Shipyard</li>
                </ul>
            </div>
            <div class="footer__contact">
                <h4>Kontak</h4>
                <p>Email: </p>
                <p>Telp: </p>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} PT Pelindo Jasa Maritim Area Kalimantan II. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Custom Alert Modal -->
    <div id="customAlert" class="custom-alert">
        <div class="custom-alert__content">
            <div class="custom-alert__icon">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            </div>
            <h3 class="custom-alert__title">Informasi Sistem</h3>
            <p class="custom-alert__text">Portal Pelanggan & Operasional Internal (Fase 2) sedang dalam tahap persiapan. Kelak akan dapat diakses secara terpisah dari halaman profil ini melalui subdomain khusus.</p>
            <button id="closeAlertBtn" class="custom-alert__btn">Saya Mengerti</button>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" class="back-to-top" title="Kembali ke Atas">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
    </button>

    @stack('scripts')
</body>
</html>
