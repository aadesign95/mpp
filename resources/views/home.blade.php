@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="hero">
            <div class="hero-bg"
                style="background: url('{{ asset('assets/images/hero-01.png') }}') no-repeat center center/cover;">
            </div>
            <div class="hero-content">
                <h1>Pelayanan Cepat, Mudah, dan Nyaman</h1>
                <p>Kami hadir untuk memberikan layanan terbaik dengan proses yang lebih mudah dan cepat.</p>
                <a href="#" class="btn btn-main">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        <!-- Section value -->
        <section>
            <div class="section-title">
                <h2 class="text-center mb-5">Nilai Yang Ditanamkan</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profile -->
        <section class="with-bg">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2 class="section-title">Profile</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eos enim, maxime illum
                        fugit quis blanditiis itaque adipisci molestias quibusdam veniam! Praesentium nostrum iste corrupti
                        iure libero quibusdam repellendus!
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="https://distrikbantennews.com/wp-content/uploads/2024/09/IMG_20240918_210848.webp"
                        alt="profile" class="w-100">
                </div>
            </div>
        </section>

        <!-- News -->
        <section>
            <div class="article-card">
                <img src="https://serang.pom.go.id/storage/gambar-berita/beritaBalai-Besar-POM-di-Serang-1727629100934.jpg"
                    class="img-fluid" alt="...">
                <div class="article-content">
                    <h5>Launching Mall Pelayanan Publik Kabupaten Serang</h5>
                    <small class="text-muted">9 September 2024</small>
                    <p class="mt-3">
                        Kabupaten Serang- Balai Besar Pengawas Obat dan Makanan di Serang (BBPOM di Serang) hadir lebih
                        dekat dengan masyarakat di Mall Pelayanan Publik (MPP) Kabupaten Serang. Gerai BBPOM di Serang mulai
                        dibuka pada Rabu (18/09/2024) bersamaan dengan penandatanganan Perjanjian Kerjasama (PKS) antara
                        DPMPTSP Kabupaten Serang dengan seluruh tenant MPP pada acara soft launching MPP Kabupaten Serang.
                        Acara ini dibuka langsung oleh Bupati Serang, Ratu Tatu Chasanah.
                    </p>
                </div>
            </div>
        </section>

        <!-- Kontak -->
        <section class="with-bg">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <h2 class="section-title">Kotak Kami</h2>
                        <div class="mt-3">
                            <address>
                                <h5>MPP Kabupaten Serang</h5>
                                <p>
                                    Jalan Merpati No. 45, Kelurahan Sukamaju, Kecamatan Harmoni,
                                    Kota Bandung, Jawa Barat, 40291, Indonesia
                                </p>
                                <abbr title="Email">E:</abbr> contact@contohperusahaan.com <br>
                                <abbr title="Phone">P:</abbr> +62 811 2233 4455
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="map-section">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1319933441596!2d106.14858907559132!3d-6.11292635995017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b5c483d9975%3A0xbd85fe2e6b2cba6b!2sMall%20Pelayanan%20Publik%20(Kota%20Serang)!5e0!3m2!1sen!2sid!4v1741073095473!5m2!1sen!2sid"
                            class="map-iframe" width="600" height="350" style="border:0;border-radius:20px"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
