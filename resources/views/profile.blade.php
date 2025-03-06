@extends('layouts.master')

@section('content')
    <div class="page-title"
        style="background: url('{{ asset('assets/images/pattern.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Profil</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- Profile -->
        <section>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="tagger">Tentang MPP</div>
                        <h1 class="section-title">Solusi Layanan Terpadu, Cepat, dan Mudah di Kabupaten Serang!</h1>
                        <p>
                            Mall Pelayanan Publik (MPP) Kabupaten Serang hadir sebagai wujud komitmen kami dalam memberikan
                            pelayanan yang cepat, mudah, dan terintegrasi. Dengan berbagai instansi pemerintah dan swasta
                            dalam satu lokasi, MPP Kabupaten Serang siap melayani Anda dengan profesionalisme dan
                            kenyamanan. Kami berusaha menghadirkan pengalaman pelayanan publik yang lebih baik bagi seluruh
                            masyarakat.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="https://tangerangekspres.disway.id/upload/1f12d52d375a81af32fccf692b132c89.jpg" alt="profile"
                        class="w-100">
                </div>
            </div>
        </section>

        <!-- Profile -->
        <section class="with-bg">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="https://cdn.rri.co.id/berita/Banten/o/1726659571823-1000125143/4m65dv4f8kg8ybl.jpeg"
                        alt="profile" class="w-100">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="tagger">Latar Belakang</div>
                        <h1 class="section-title">Latar Belakang</h1>
                        <p>
                            Kualitas pelayanan publik yang rendah kerap dikritik karena prosedur berbelit, SDM kurang
                            profesional, serta ketidakpastian waktu dan biaya, menyebabkan tingginya biaya ekonomi.
                            Reformasi pelayanan pun diperlukan, dimulai dari Generasi Pelayanan Publik Terpadu, lalu
                            Pelayanan Terpadu Satu Pintu (PTSP), hingga Mal Pelayanan Publik (MPP) yang lebih progresif
                            dengan mengintegrasikan layanan pemerintah, BUMD, dan swasta.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2>Definisi Mal Pelayanan Publik</h2>
            <p>
                Definisi Mal Pelayanan Publik menurut Permen PANRB Nomor 92 Tahun 2021 adalah pengintegrasian Pelayanan
                Publik yang diberikan oleh kementerian, lembaga, pemerintah daerah provinsi dan kabupaten/kota, badan usaha
                milik negara, badan usaha milik daerah, serta swasta secara terpadu pada 1 (satu) tempat sebagai upaya
                meningkatkan kecepatan, kemudahan, jangkauan, kenyamanan, dan keamanan pelayanan.
            </p>
        </section>
        <hr>
        <section>
            <h2>Dasar Hukum</h2>
            <ul class="list-style-none">
                <li>
                    <i class="ph-fill ph-check-circle text-success"></i>
                    <span>Peraturan Presiden Nomor 89 Tahun 2021 Tentang Penyelenggaraan Pelayanan Publik</span>
                </li>
                <li>
                    <i class="ph-fill ph-check-circle text-success"></i>
                    <span>Peraturan Menteri PANRB Nomor 92 Tahun 2021 Tentang Petunjuk Teknis Penyelenggaraan Mal Pelayanan
                        Publik</span>
                </li>
                <li>
                    <i class="ph-fill ph-check-circle text-success"></i>
                    <span>Peraturan Bupati Bogor Nomor 67 Tahun 2023 Tentang Penyelenggaraan Mal Pelayanan Publik</span>
                </li>
            </ul>
        </section>
    </div>
@endsection
