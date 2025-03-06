@extends('layouts.master')

@section('content')
    <div class="page-title"
        style="background: url('{{ asset('assets/images/pattern.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Berita</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: -30px;">
        <div class="card">
            <div class="card-body">
                <form>
                    <input type="search" class="form-control" placeholder="Cari Berita">
                </form>
            </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="https://cdn.antaranews.com/cache/1200x800/2024/09/18/IMG-20240918-WA0013_3.jpg" alt="img"
                        class="w-100 h-75 object-fit-cover">
                    <div class="mt-4">
                        <div class="mb-3">
                            <time datetime="2024-09-18">6 Maret 2025</time>
                        </div>
                        <a href="{{ url('/articles-detail') }}" class="article-title-link">Transformasi Pelayanan Publik:
                            Dari Birokrasi Rumit ke Efisiensi MPP</a>
                    </div>
                    <button type="button" class="btn btn-readmore">Baca Selengkapnya</button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="https://www.bantenekspres.co.id/wp-content/uploads/2024/09/DJP-Banten-dan-MPP-Kab-Serang-Teken-MoU.webp"
                        alt="img" class="w-100 h-75 object-fit-cover">
                    <div class="mt-4">
                        <div class="mb-3">
                            <time datetime="2024-09-18">6 Maret 2025</time>
                        </div>
                        <a href="{{ url('/articles-detail') }}" class="article-title-link">Mal Pelayanan Publik: Solusi
                            Inovatif untuk Birokrasi yang Lebih Baik</a>
                    </div>
                    <button type="button" class="btn btn-readmore">Baca Selengkapnya</button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="https://serang.pom.go.id/storage/gambar-berita/beritaBalai-Besar-POM-di-Serang-1727629100230.jpg"
                        alt="img" class="w-100 h-75 object-fit-cover">
                    <div class="mt-4">
                        <div class="mb-3">
                            <time datetime="2024-09-18">6 Maret 2025</time>
                        </div>
                        <a href="{{ url('/articles-detail') }}" class="article-title-link">Menuju Pelayanan Publik yang
                            Lebih Cepat dan Efisien</a>
                    </div>
                    <button type="button" class="btn btn-readmore">Baca Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>
@endsection
