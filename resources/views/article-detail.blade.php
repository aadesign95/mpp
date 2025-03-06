@extends('layouts.master')

@section('content')
    <div class="page-title"
        style="text-align: left; background: url('{{ asset('assets/images/pattern.png') }}') no-repeat center center/cover;">
        <div class="container">
            <h1 class="detail-title">Transformasi Pelayanan Publik: Dari Birokrasi Rumit ke Efisiensi MPP</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/article') }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transformasi Pelayanan Publik: Dari Birokrasi
                        Rumit ke Efisiensi MPP</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <!-- Konten Utama -->
                <article class="col-12 col-md-8">
                    <img src="https://cdn.antaranews.com/cache/1200x800/2024/09/18/IMG-20240918-WA0013_3.jpg"
                        alt="Transformasi Pelayanan Publik" class="img-fluid w-100 h-auto object-fit-cover">

                    <ul class="article-meta list-unstyled d-flex flex-wrap gap-3 mt-3">
                        <li><i class="ph-bold ph-calendar-dots"></i> <span>17 September 2023</span></li>
                        <li><i class="ph-bold ph-user-circle-gear"></i> <span>Aan Ardiyana</span></li>
                        <li><span class="badge bg-success">Pelayanan Publik</span></li>
                    </ul>

                    <div class="article-content mt-3">
                        <p>Pelayanan publik di Indonesia kerap dikritik karena sistem yang berbelit dan tidak efisien.
                            Reformasi terus dilakukan melalui Pelayanan Publik Terpadu, PTSP, hingga Mal Pelayanan Publik
                            (MPP) yang lebih progresif dalam menyederhanakan birokrasi.</p>
                        <p>Pelayanan publik sering dikritik karena sistem yang rumit, lambat, dan berbiaya tinggi. Oleh
                            karena itu, reformasi pelayanan publik terus dilakukan melalui beberapa tahap perkembangan.</p>
                        <p>MPP menjadi solusi modern untuk mempercepat layanan, meningkatkan transparansi, dan mengurangi
                            biaya ekonomi tinggi dalam birokrasi.</p>
                    </div>

                    <div class="mt-4">
                        <strong>Bagikan:</strong>
                        <div class="d-flex gap-3 mt-2">
                            <a href="#" class="text-decoration-none fs-5"><i
                                    class="ph-fill ph-facebook-logo text-primary"></i></a>
                            <a href="#" class="text-decoration-none fs-5"><i
                                    class="ph-fill ph-twitter-logo text-info"></i></a>
                            <a href="#" class="text-decoration-none fs-5"><i
                                    class="ph-fill ph-whatsapp-logo text-success"></i></a>
                        </div>
                    </div>

                    <div class="post-navigation">
                        <a href="#" class="prev-post">
                            <img src="https://www.bantenekspres.co.id/wp-content/uploads/2024/09/DJP-Banten-dan-MPP-Kab-Serang-Teken-MoU.webp"
                                alt="Previous Post">
                            <span>Previous Post</span>
                        </a>

                        <a href="#" class="all-posts">
                            <i class="ph ph-grid text-muted"></i>
                        </a>

                        <a href="#" class="next-post">
                            <span>Next Post</span>
                            <img src="https://serang.pom.go.id/storage/gambar-berita/beritaBalai-Besar-POM-di-Serang-1727629100230.jpg"
                                alt="Next Post">
                        </a>
                    </div>

                </article>

                <!-- Sidebar -->
                <aside class="col-12 col-md-4">
                    <h5 class="mb-3">Artikel Terbaru</h5>
                    <div class="list-group list-group-flush mb-5">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://cdn.antaranews.com/cache/1200x800/2024/09/18/IMG-20240918-WA0013_3.jpg"
                                        alt="" class="img-fluid object-fit-cover" height="100">
                                </div>
                                <div class="col-8">
                                    <h6>Peningkatan Kualitas Layanan Publik di Era Digital</h6>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://cdn.antaranews.com/cache/1200x800/2024/09/18/IMG-20240918-WA0013_3.jpg"
                                        alt="" class="img-fluid object-fit-cover" height="100">
                                </div>
                                <div class="col-8">
                                    <h6>Regulasi Baru untuk Mempercepat Proses Perizinan</h6>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://cdn.antaranews.com/cache/1200x800/2024/09/18/IMG-20240918-WA0013_3.jpg"
                                        alt="" class="img-fluid object-fit-cover" height="100">
                                </div>
                                <div class="col-8">
                                    <h6>Peran Teknologi dalam Meningkatkan Efisiensi Layanan</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h5 class="mb-3">Kategori</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Pelayanan Publik</a>
                        <a href="#" class="list-group-item list-group-item-action">Inovasi Pemerintah</a>
                        <a href="#" class="list-group-item list-group-item-action">Reformasi Birokrasi</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
