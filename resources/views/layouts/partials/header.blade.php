<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-custom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            MPP Kabupaten Serang
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse custom-navbar-bg" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                    href="{{ url('/profile') }}">Profil</a>
                <a class="nav-link {{ request()->is('articles') ? 'active' : '' }}"
                    href="{{ url('/articles') }}">Berita</a>
                <a class="nav-link {{ request()->is('services') ? 'active' : '' }}"
                    href="{{ url('/services') }}">Layanan</a>
                <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}"
                    href="{{ url('/contact-us') }}">Kontak Kami</a>
            </div>
        </div>
    </div>
</nav>
