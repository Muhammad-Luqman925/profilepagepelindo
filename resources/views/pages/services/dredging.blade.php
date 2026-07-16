@extends('layouts.main')

@section('title', 'Dredging Solution - SPJM Area Kalimantan II')

@section('content')
    <div class="page-header bg-dredging-header">
        <div class="container text-center">
            <h1 class="page-header__title">Dredging Solution</h1>
            <p class="page-header__subtitle">Solusi Pengerukan dan Perawatan Alur Pelayaran</p>
        </div>
    </div>

    <section class="section-padding bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-2 gap-12 items-center">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1456518563096-0ff5ee08204e?q=80&w=2071&auto=format&fit=crop" alt="Dredging Solution" class="img-fluid">
                </div>

                <div>
                    <h2 class="text-primary-dark mb-6 text-2xl">Menjamin Kedalaman, Memastikan Kelancaran</h2>
                    <p class="text-gray-600 line-height-1.8 mb-4">
                        Pendangkalan alur sungai dan pelabuhan adalah tantangan utama maritim di Kalimantan. Melalui layanan <strong>Dredging Solution</strong>, SPJM Area Kalimantan II memberikan solusi komprehensif untuk memastikan kedalaman alur tetap aman dinavigasi oleh kapal ber-draft dalam.
                    </p>
                    <p class="text-gray-600 line-height-1.8 mb-6">
                        Kami menggunakan teknologi pengerukan terkini yang tidak hanya efektif namun juga mempertimbangkan dampak ekologis terhadap lingkungan perairan sekitar.
                    </p>
                    
                    <h3 class="text-secondary mb-4">Fokus Pengerukan:</h3>
                    <ul class="list-none p-0">
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Capital Dredging:</strong> Pengerukan awal untuk pembuatan kolam pelabuhan atau alur pelayaran baru.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Maintenance Dredging:</strong> Perawatan kedalaman alur pelayaran sungai (seperti Sungai Mahakam) dari sedimentasi alami.</span>
                        </li>
                        <li class="mb-3 flex items-start gap-4">
                            <span class="text-primary">✔</span>
                            <span class="text-gray-700"><strong class="font-bold">Reclamation:</strong> Pemindahan material keruk untuk pemadatan area pelabuhan baru.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
