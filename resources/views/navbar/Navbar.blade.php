

<nav class="navbar navbar-expand fixed-top" id="demo1Navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-danger fw-bold" href="/">
            SPN POLDA SULUT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
                <li class="nav-item">
                    <a class="btn {{ Request::is('/') ? 'text-primary' : '' }}"
                        href="/">Home</a>
                </li>

                <li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle {{ Request::is('home') ? 'text-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">
                            Profile
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('VisiMisi') }}">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="">Sejarah SPN</a></li>
                            <li><a class="dropdown-item" href="#">Organisasi</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle {{ Request::is('home') ? 'text-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Giat Siswa</a></li>
                            <li><a class="dropdown-item" href="#">Giat Personil</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle {{ Request::is('home') ? 'text-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Diktuk</a></li>
                            <li><a class="dropdown-item" href="#">Dikbang</a></li>
                            <li><a class="dropdown-item" href="#">Pelatihan</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle {{ Request::is('home') ? 'text-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">Foto</a></li>
                            <li><a class="dropdown-item" href="#">Video</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn {{ Request::is('Kontak') ? 'text-primary' : '' }}" aria-current="page"
                        href="">Kontak</a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2 mr-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 400px">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <div class="d-flex text-decoration-none">
                <button class="btn text-danger btn-link ml-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <strong class="text-decoration-none">
                     What News
                    </strong>
                </button>
            </div>

        </div>
    </div>
</nav>
@include('navbar.Right-side')
