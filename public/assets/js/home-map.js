document.addEventListener('DOMContentLoaded', function() {
    // Pastikan elemen peta ada sebelum inisialisasi
    if (!document.getElementById('operational-map')) return;

    // 1. Inisialisasi Peta (Berpusat di Kalimantan Timur)
    const map = L.map('operational-map').setView([0.5, 117.5], 7);
    
    // Definisikan beberapa pilihan Peta Dasar (Basemaps)
    const cartoVoyager = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OSM & CARTO', subdomains: 'abcd', maxZoom: 19
    });

    const osmStandard = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap', maxZoom: 19
    });

    const esriSatellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: '&copy; Esri, Earthstar Geographics', maxZoom: 19
    });

    const cartoDark = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OSM & CARTO', subdomains: 'abcd', maxZoom: 19
    });

    // Tambahkan peta default ke map
    cartoVoyager.addTo(map);

    // Buat objek untuk layer control
    const baseMaps = {
        "Peta Standar (Terang)": cartoVoyager,
        "Satelit (Citra Bumi)": esriSatellite,
        "Peta Gelap (Mode Malam)": cartoDark,
        "Peta Klasik (OSM)": osmStandard
    };

    // Tambahkan kontrol layar ke peta
    L.control.layers(baseMaps, null, { position: 'topright' }).addTo(map);

    // 2. Data Tiruan (Dummy Data) Wilayah & Zona
    const zonesData = {
        samarinda: [
            { id: 'z_smr_1', name: 'Zona Muara Berau (STS)', wilId: 'samarinda' },
            { id: 'z_smr_2', name: 'Zona Pelabuhan Palaran', wilId: 'samarinda' },
            { id: 'z_smr_3', name: 'Zona Pelabuhan Samarinda', wilId: 'samarinda' },
            { id: 'z_smr_4', name: 'Zona Pemanduan muara muntai', wilId: 'samarinda' },
            { id: 'z_smr_5', name: 'Zona Pemanduan Martadipura', wilId: 'samarinda' },
            { id: 'z_smr_6', name: 'Zona Pemanduan Tenggarong', wilId: 'samarinda' },
            { id: 'z_smr_7', name: 'Zona Pemanduan Mahulu', wilId: 'samarinda' },
            { id: 'z_smr_8', name: 'Zona Pemanduan Mahakam', wilId: 'samarinda' },
            { id: 'z_smr_9', name: 'Zona Pemanduan Samarinda', wilId: 'samarinda' },
            { id: 'z_smr_10', name: 'Zona Pemanduan Mahkota II', wilId: 'samarinda' },
            { id: 'z_smr_11', name: 'Zona Pemanduan Muara Pegah', wilId: 'samarinda' }

            
        ],
        bontang: [
            { id: 'z_bnt_1', name: 'Zona Terminal Lhoktuan', wilId: 'bontang' },
            { id: 'z_bnt_2', name: 'Zona Tersus Pupuk Kaltim', wilId: 'bontang' }
        ],
        sangkulirang: [
            { id: 'z_sgk_1', name: 'Zona Muara Sangatta', wilId: 'sangkulirang' },
            { id: 'z_sgk_2', name: 'Zona Pelabuhan Sangkulirang', wilId: 'sangkulirang' }
        ],
        tanjungsantan: [
            { id: 'z_tjs_1', name: 'Zona SPM Tanjung Santan', wilId: 'tanjungsantan' }
        ]
    };

    const facilitiesData = [
        // Samarinda
        { id: 'z_smr_1', wilId: 'samarinda', zoneId: 'z_smr_1', name: 'Titik Labuh STS Muara Berau', type: 'Marine Services', address: 'Perairan Muara Berau, Selat Makassar', coord: [-0.6000, 117.5500], desc: 'Layanan pemanduan dan penundaan kapal untuk kegiatan Ship-to-Ship Transfer batubara.' },
        { id: 'z_smr_2', wilId: 'samarinda', zoneId: 'z_smr_2', name: 'Terminal Petikemas Palaran', type: 'Equipment Services', address: 'Jl. Melanti, Palaran, Samarinda', coord: [-0.572985, 117.206279], desc: 'Dukungan operasional alat berat dan utilitas pelabuhan.' },
        { id: 'z_smr_3', wilId: 'samarinda', zoneId: 'z_smr_3', name: 'Pelabuhan Penumpang Samarinda', type: 'Port Services', address: 'Jl. Yos Sudarso, Samarinda', coord: [-0.508807, 117.155693], desc: 'Pasokan air bersih dan listrik kapal.' },
        { id: 'z_smr_4', wilId: 'samarinda', zoneId: 'z_smr_4', name: 'Pemanduan Muara Muntai', type: 'Marine Services', address: 'Sungai Alur Pelayaran Muara Muntai, Sungai Mahakam', coord: [-0.362485, 116.389542], desc: 'Perairan Muara Muntai, Sungai Mahakam, Kutai Kartanegara' },
        { id: 'z_smr_5', wilId: 'samarinda', zoneId: 'z_smr_5', name: 'Pemanduan Martadipura', type: 'Marine Services', address: 'Sungai Alur Pelayaran Martadipura, Sungai Mahakam', coord: [-0.220644, 116.593228], desc: 'Perairan Martadipura, Sungai Mahakam, Kutai Kartanegara' },
        { id: 'z_smr_6', wilId: 'samarinda', zoneId: 'z_smr_6', name: 'Pemanduan Tenggarong', type: 'Marine Services', address: 'Sungai Alur Pelayaran Tenggarong, Sungai Mahakam', coord: [-0.443761, 117.002692], desc: 'Perairan Tenggarong, Sungai Mahakam, Kutai Kartanegara' },
        { id: 'z_smr_7', wilId: 'samarinda', zoneId: 'z_smr_7', name: 'Pemanduan Mahulu', type: 'Marine Services', address: 'Sungai Alur Pelayaran Mahulu, Sungai Mahakam', coord: [-0.555646, 117.083464], desc: 'Perairan Mahulu, Sungai Mahakam, Kutai Barat' },
        { id: 'z_smr_8', wilId: 'samarinda', zoneId: 'z_smr_8', name: 'Pemanduan Mahakam', type: 'Marine Services', address: 'Sungai Alur Pelayaran Mahakam, Sungai Mahakam', coord: [-0.519889, 117.119278], desc: 'Perairan Mahulu, Sungai Mahakam, Kutai Barat' },
        { id: 'z_smr_9', wilId: 'samarinda', zoneId: 'z_smr_9', name: 'Pemanduan Samarinda', type: 'Marine Services', address: 'Sungai Alur Pelayaran Samarinda, Sungai Mahakam', coord: [-0.519218, 117.119403], desc: 'Perairan Mahulu, Sungai Mahakam, Kutai Barat' },
        { id: 'z_smr_10', wilId: 'samarinda', zoneId: 'z_smr_10', name: 'Pemanduan Mahkota II', type: 'Marine Services', address: 'Sungai Alur Pelayaran Mahkota II, Sungai Mahakam', coord: [-0.532764, 117.158429], desc: 'Perairan Mahulu, Sungai Mahakam, Kutai Barat' },
        { id: 'z_smr_11', wilId: 'samarinda', zoneId: 'z_smr_11', name: 'Pemanduan Muara Pegah', type: 'Marine Services', address: 'Sungai Alur Pelayaran Muara Pegah, Sungai Mahakam', coord: [-0.875077, 117.308375], desc: 'Perairan Mahulu, Sungai Mahakam, Kutai Barat' },

        // Bontang
        { id: 'z_bnt_1', wilId: 'bontang', zoneId: 'z_bnt_1', name: 'Terminal Umum Lhoktuan', type: 'Marine & Port Services', address: 'Lhoktuan, Bontang Utara', coord: [0.1583, 117.4833], desc: 'Layanan terintegrasi pelabuhan umum Bontang.' },
        { id: 'z_bnt_2', wilId: 'bontang', zoneId: 'z_bnt_2', name: 'Terminal Khusus PKT', type: 'Marine Services', address: 'Kawasan Industri Pupuk Kaltim', coord: [0.1667, 117.5000], desc: 'Pemanduan kapal khusus pupuk & amoniak.' },
        
        // Sangkulirang
        { id: 'z_sgk_1', wilId: 'sangkulirang', zoneId: 'z_sgk_1', name: 'Kolam Muara Sangatta', type: 'Dredging Solution', address: 'Muara Sungai Sangatta', coord: [0.4333, 117.5833], desc: 'Pemeliharaan alur pelayaran dan pengerukan dangkal.' },
        { id: 'z_sgk_2', wilId: 'sangkulirang', zoneId: 'z_sgk_2', name: 'Pelabuhan Sangkulirang', type: 'Equipment Services', address: 'Sangkulirang, Kutai Timur', coord: [0.9833, 117.9667], desc: 'Penyediaan alat bongkar muat logistik.' },
        
        // Tanjung Santan
        { id: 'z_tjs_1', wilId: 'tanjungsantan', zoneId: 'z_tjs_1', name: 'Fasilitas SPM Tanjung Santan', type: 'Marine Services', address: 'Perairan Tanjung Santan, Marangkayu', coord: [-0.0833, 117.5167], desc: 'Layanan penundaan untuk kapal tanker minyak dan gas.' }
    ];

    let currentMarkers = [];
    
    // Icon Kustom Pelindo
    const pelindoIcon = L.divIcon({
        className: 'custom-pin',
        html: `<div style="background-color: var(--color-primary); width: 24px; height: 24px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 5px rgba(0,0,0,0.3);"></div>`,
        iconSize: [24, 24],
        iconAnchor: [12, 12]
    });

    // Elemen DOM
    const wilSelect = document.getElementById('filter-wilayah');
    const zonSelect = document.getElementById('filter-zona');
    const btnReset = document.getElementById('btn-reset-map');
    const cardsContainer = document.getElementById('cards-container');
    const dataCounter = document.getElementById('data-counter');

    // 3. Fungsi Render Markers
    function renderMarkers(data) {
        // Hapus marker lama
        currentMarkers.forEach(m => map.removeLayer(m));
        currentMarkers = [];

        if(data.length === 0) return;

        const bounds = L.latLngBounds();

        data.forEach(fac => {
            const marker = L.marker(fac.coord, {icon: pelindoIcon}).addTo(map);
            marker.bindPopup(`<b>${fac.name}</b><br>${fac.type}`);
            
            marker.on('click', () => highlightCard(fac.id));
            
            currentMarkers.push(marker);
            bounds.extend(fac.coord);
        });

        // Sesuaikan zoom
        if(data.length === 1) {
            map.setView(data[0].coord, 11);
        } else {
            map.fitBounds(bounds, {padding: [50, 50], maxZoom: 10});
        }
    }

    // 4. Fungsi Render Cards
    function renderCards(data) {
        cardsContainer.innerHTML = '';
        dataCounter.textContent = `${data.length} Fasilitas`;

        if(data.length === 0) {
            cardsContainer.innerHTML = `<div style="padding: 2rem; text-align: center; color: var(--color-gray-500);">Tidak ada data ditemukan.</div>`;
            return;
        }

        data.forEach(fac => {
            // Cari nama zona
            let zoneName = "Zona Umum";
            Object.values(zonesData).flat().forEach(z => {
                if(z.id === fac.zoneId) zoneName = z.name;
            });

            const card = document.createElement('div');
            card.className = 'info-card';
            card.id = `card-${fac.id}`;
            card.innerHTML = `
                <span class="tag-zona">${zoneName}</span>
                <h4>${fac.name}</h4>
                <div class="card-meta">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span><span class="tag-layanan">${fac.type}</span></span>
                </div>
                <div class="card-meta">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>${fac.address}</span>
                </div>
            `;

            // Klik kartu untuk zoom ke marker
            card.addEventListener('click', () => {
                highlightCard(fac.id);
                map.setView(fac.coord, 12);
                // Buka popup marker terkait
                const idx = data.findIndex(d => d.id === fac.id);
                if(idx > -1 && currentMarkers[idx]) {
                    currentMarkers[idx].openPopup();
                }
            });

            cardsContainer.appendChild(card);
        });
    }

    function highlightCard(id) {
        document.querySelectorAll('.info-card').forEach(c => c.classList.remove('active'));
        const target = document.getElementById(`card-${id}`);
        if(target) {
            target.classList.add('active');
            target.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    // 5. Event Listeners (Filter Logic)
    wilSelect.addEventListener('change', (e) => {
        const wilId = e.target.value;
        
        // Update Zona Dropdown
        zonSelect.innerHTML = '<option value="all">Semua Zona</option>';
        if(wilId === 'all') {
            zonSelect.disabled = true;
        } else {
            zonSelect.disabled = false;
            if(zonesData[wilId]) {
                zonesData[wilId].forEach(z => {
                    zonSelect.innerHTML += `<option value="${z.id}">${z.name}</option>`;
                });
            }
        }

        filterData();
    });

    zonSelect.addEventListener('change', filterData);

    btnReset.addEventListener('click', () => {
        wilSelect.value = 'all';
        zonSelect.value = 'all';
        zonSelect.disabled = true;
        filterData();
        map.setView([0.5, 117.5], 7);
    });

    function filterData() {
        const wId = wilSelect.value;
        const zId = zonSelect.value;

        let filtered = facilitiesData;
        if(wId !== 'all') {
            filtered = filtered.filter(f => f.wilId === wId);
        }
        if(zId !== 'all') {
            filtered = filtered.filter(f => f.zoneId === zId);
        }

        renderMarkers(filtered);
        renderCards(filtered);
    }

    // Init load
    filterData();

    // Fix map incomplete tile loading issue (grey area) caused by flexbox/grid layout calculation delay
    setTimeout(() => {
        map.invalidateSize();
    }, 500);
});
