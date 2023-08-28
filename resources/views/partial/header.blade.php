<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/img/logo-nav.png') }}" alt=""></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="{{ $title === 'Home' ? 'active' : '' }}">Home</a></li>
                @auth
                <li class="dropdown"><a href="/"><span>Prediksi</span>
                     <i class="bi bi-chevron-down"></i>
                </a>
                    <ul>
                        <li><a href="/penyerang" class="{{ $title === 'Attacker' ? 'active' : '' }}">Pemain Penyerang</a></li>
                        <li><a href="/tengah" class="{{ $title === 'Midfield' ? 'active' : '' }}">Pemain Gelandang</a></li>
                        <li><a href="/bertahan" class="{{ $title === 'Defender' ? 'active' : '' }}">Pemain Bertahan</a></li>
                        <li><a href="/kiper" class="{{ $title === 'Goalkeeping' ? 'active' : '' }}">Penjaga Gawang</a>
                        </li>
                    </ul>
                </li>
                @endauth
                <li><a href="/contohData" class="{{ $title === 'Kriteria Data' ? 'active' : '' }}">Kriteria Data</a>
                </li>
                <li class="dropdown"><a href="/tentang"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/tentang" class="{{ $title === 'Tentang' ? 'active' : '' }}">Tentang</a></li>
                        <li><a href="/pengembang" class="{{ $title === 'Pengembang' ? 'active' : '' }}">Tim Kami</a></li>
                        <li><a href="/petunjuk" class="{{ $title === 'Petunjuk' ? 'active' : '' }}">Panduan</a></li>

                        {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn tombol">Logout</button>
                    </form>
                @else
                    <li><a href="/login" class="getstarted">Sign in</a></li>
                @endauth

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
