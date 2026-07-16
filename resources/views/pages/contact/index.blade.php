@extends('layouts.main')

@section('title', 'SPJM Area Kalimantan II - Hubungi Kami')

@section('content')
    <div class="page-header bg-contact-header">
        <div class="container text-center">
            <h1 class="page-header__title">Hubungi Kami</h1>
            <p class="page-header__subtitle">Pusat Layanan Informasi dan Pengaduan SPJM Area Kalimantan II</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="section-grid">
                <!-- Bagian Kiri: Info Kontak & Peta -->
                <div>
                    <h2 class="section-title">Informasi Kontak</h2>
                    
                    <div class="flex gap-4 mb-6">
                        <div class="w-40px h-40px bg-primary-light text-primary rounded-lg flex items-center justify-center shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div>
                            <h4 class="mb-2 font-semibold">Alamat Kantor Area II</h4>
                            <p class="text-gray-600 line-height-1.6">Jl. Niaga Timur No.130, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75112</p>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-6">
                        <div class="w-40px h-40px bg-primary-light text-primary rounded-lg flex items-center justify-center shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div>
                            <h4 class="mb-2 font-semibold">Telepon</h4>
                            <p class="text-gray-600 line-height-1.6">(0542) 123456</p>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-8">
                        <div class="w-40px h-40px bg-primary-light text-primary rounded-lg flex items-center justify-center shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div>
                            <h4 class="mb-2 font-semibold">Email Resmi</h4>
                            <p class="text-gray-600 line-height-1.6">info.kalimantan@jasamaritim.co.id</p>
                        </div>
                    </div>

                    <!-- Embed Maps -->
                    <h3 class="section-title mb-4 text-xl">Lokasi Kami</h3>
                    <div class="w-full h-300px bg-gray-50 rounded-xl overflow-hidden">
                        <iframe src="https://maps.google.com/maps?q=Jl.%20Niaga%20Timur%20No.130,%20Pelabuhan,%20Kec.%20Samarinda%20Kota,%20Kota%20Samarinda,%20Kalimantan%20Timur%2075112&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Bagian Kanan: Formulir -->
                <div>
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <h2 class="section-title mb-2 text-2xl">Kirim Pesan Formal</h2>
                        <p class="text-gray-500 text-sm mb-6">Kami akan merespons pesan Anda secepatnya melalui email operasional kami.</p>
                        
                        <form action="#" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <div>
                                <label class="form-label">Nama Lengkap / Instansi *</label>
                                <input type="text" class="form-control" placeholder="Contoh: PT ABC Indonesia" required>
                            </div>
                            
                            <div>
                                <label class="form-label">Alamat Email *</label>
                                <input type="email" class="form-control" placeholder="contoh@perusahaan.com" required>
                            </div>
                            
                            <div>
                                <label class="form-label">Subjek *</label>
                                <select class="form-control bg-white" required>
                                    <option value="" disabled selected>Pilih Topik Layanan</option>
                                    <option value="marine">Pertanyaan Marine Services</option>
                                    <option value="equipment">Penyewaan Alat (Equipment)</option>
                                    <option value="dredging">Proyek Pengerukan</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="form-label">Pesan Anda *</label>
                                <textarea class="form-control min-h-150px resize-y" placeholder="Tuliskan rincian kebutuhan Anda..." required></textarea>
                            </div>
                            
                            <button type="button" class="btn-primary mt-2">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
