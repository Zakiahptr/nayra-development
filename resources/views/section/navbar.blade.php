<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Amany Residence</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/', ) ? 'active' : ''}}">
                <a href="{{ route('home') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item {{ Request::is('perumahan', ) ? 'active' : ''}}">
                <a href="{{ route('residence') }}" class="nav-link">Perumahan</a>
            </li>
            <li class="nav-item {{ Request::is('artikel', ) ? 'active' : ''}}">
                <a href="{{ route('article') }}" class="nav-link">Artikel</a>
            </li>
            <li class="nav-item {{ Request::is('tentang-kami', ) ? 'active' : ''}}">
                <a href="{{ route('about') }}" class="nav-link">Tentang Kami</a>
            </li>
            <li class="nav-item {{ Request::is('kontak-kami', ) ? 'active' : ''}}">
                <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
