@extends('layouts.master')

@section('content')
    <div class="page-title"
        style="background: url('{{ asset('assets/images/pattern.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Kontak Kami</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-section">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1319933441596!2d106.14858907559132!3d-6.11292635995017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b5c483d9975%3A0xbd85fe2e6b2cba6b!2sMall%20Pelayanan%20Publik%20(Kota%20Serang)!5e0!3m2!1sen!2sid!4v1741073095473!5m2!1sen!2sid"
                            class="map-iframe" width="600" height="350" style="border:0;border-radius:20px"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <h2>Alamat MPP Kabupaten Bogor</h2>
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
            </div>
        </div>
    </section>
@endsection
