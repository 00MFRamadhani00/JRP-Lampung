@extends('layouts.main')

@section('title', $title)

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Lokasi Kami</h1>
    </div><!-- End Page Title -->

    <section class="section location">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">5°25'54.0"S 105°15'42.6"E
                                <hr>
                            </h5>

                            <!-- Isi Start -->
                            <div id="map-container" style="height: 600px; margin-top: 20px;"></div> <!-- Tinggi div diperbesar menjadi 600px -->

                            <!-- Masukkan stylesheet Leaflet -->
                            <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

                            <!-- Tambahkan script Leaflet -->
                            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                            <script>
                                // Inisialisasi peta
                                var map = L.map('map-container').setView([-5.431667, 105.261833], 15); // Koordinat dan level zoom

                                // Tambahkan layer peta dari OpenStreetMap
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: false  // Menyembunyikan atribusi Leaflet dan OpenStreetMap
                                }).addTo(map);

                                // Tambahkan marker pada lokasi
                                var marker = L.marker([-5.431667, 105.261833]).addTo(map)
                                    .bindPopup('Lokasi PT Jasa Raharja Putera Lampung')
                                    .openPopup();

                                // Fungsi untuk menanggapi perubahan ukuran atau redrawing peta saat sidebar berubah status
                                function updateMap() {
                                    map.invalidateSize();
                                }

                                // Panggil fungsi saat sidebar dibuka atau ditutup
                                $('#sidebarCollapse').on('click', function () {
                                    updateMap();
                                });

                                // Gunakan peristiwa resize dari Leaflet untuk memicu pembaruan peta
                                map.on('resize', function () {
                                    updateMap();
                                });
                            </script>
                            <!-- Isi End -->
                        </div>
                    </div><!-- End Default Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</main>
@endsection
