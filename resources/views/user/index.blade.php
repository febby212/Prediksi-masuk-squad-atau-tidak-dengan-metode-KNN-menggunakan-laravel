@extends('layout.userlay')

@section('konten')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="7000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/squad.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span class="merek">Squad
                                    Predict</span></h2>
                            @auth
                                <p class="animate__animated animate__fadeInUp">Halo Coach <b class="merek text-capitalize">{{ Auth::user()->name }}</b>, Ayo bangun squad impian anda bersama kami. </p>
                                @else
                                <p class="animate__animated animate__fadeInUp">Bangun squad impian anda dengan kami. </p>
                            @endauth
                            
                            <a href="/tentang" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/pelatih.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Wujudkan Squad Terbaik Anda</h2>
                            <p class="animate__animated animate__fadeInUp">Bersama kami, squad terbaik dapat anda wujudkan dengan mudah.</p>
                            <a href="/tentang" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/milih.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Pilih Pemain sesuai Strategi Anda</h2>
                            <p class="animate__animated animate__fadeInUp">Pemain bertahan, Pemain penyerang, atau Pemain yang anda suka. Pada akhirnya Pemain sesuai kebutuhanlah yang akan terpilih.</p>
                            <a href="/tentang" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2 data-aos="fade-right" data-aos-duration="500">Prediksi dengan akurasi</h2>
                        <h3 data-aos="fade-right" data-aos-duration="800">Bangun squad versi Anda dengan prediksi pemain yang akurat menggunakan AI di sini!
                        </h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p data-aos="fade-left" data-aos-duration="500">
                            Temukan pemain yang sesuai dengan keinginan Anda berdasarkan prediksi yang akurat dengan Squad
                            Predict. Dengan menggunakan teknologi
                            AI dan dengan data yang terpercaya, kami dapat membantu Anda dalam membangun tim terbaik versi
                            Anda.
                        </p>
                        <ul>
                            <li data-aos="fade-left" data-aos-duration="800"><i class="ri-check-double-line"></i> Data up-to-date</li>
                            <li data-aos="fade-left" data-aos-duration="900"><i class="ri-check-double-line"></i> Mudah digunakan</li>
                            <li data-aos="fade-left" data-aos-duration="1000"><i class="ri-check-double-line"></i> Personalisasi secara optimal</li>
                            <li data-aos="fade-left" data-aos-duration="1100"><i class="ri-check-double-line"></i> Efisiensi waktu & tenaga</li>
                        </ul>
                        <p class="fst-italic" data-aos="fade-left" data-aos-duration="1200">
                            Jadi tunggu apa lagi? Ayo bergabung dengan kami dan bangun squad terbaik versi Anda.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row justify-content-center">

                    {{-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div> --}}

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-up"  data-aos-duration="100">
                        <img src="assets/img/clients/sofifa.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-up"  data-aos-duration="200">
                        <img src="assets/img/clients/FIFA22.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-up"  data-aos-duration="300">
                        <img src="assets/img/clients/logo-inggris.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-up"  data-aos-duration="400">
                        <img src="assets/img/clients/boostrap.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-up"  data-aos-duration="500">
                        <img src="assets/img/clients/openai.png" class="img-fluid" alt="">
                    </div>


                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6" data-aos="fade-right"  data-aos-duration="800">
                        <div class="icon-box">
                            <i class="ri-bar-chart-2-fill"></i>
                            <h4><a href="#">Analisis Mendalam</a></h4>
                            <p>Kami mengidentifikasi faktor kunci yang
                                mempengaruhi kekuatan squad untuk memberikan keunggulan strategis.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-left"  data-aos-duration="800">
                        <div class="icon-box">
                            <i class="ri-focus-3-line"></i>
                            <h4><a href="#">Prediksi akurat</a></h4>
                            <p>Kami memberikan prediksi squad yang akurat berdasarkan analisis data yang terperinci.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-right"  data-aos-duration="1000">
                        <div class="icon-box">
                            <i class="ri-speed-up-line"></i>
                            <h4><a href="#">Kecepatan</a></h4>
                            <p>Memberikan prediksi dengan cepat, memungkinkan Anda untuk mengambil keputusan dengan cepat.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-left"  data-aos-duration="1000">
                        <div class="icon-box">
                            <i class="ri-line-chart-line"></i>
                            <h4><a href="#">Mendukung Keputusan Strategis</a></h4>
                            <p>Anda dapat membuat keputusan strategis dalam membangun tim yang kuat dan meraih kemenangan.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-right"  data-aos-duration="1200">
                        <div class="icon-box">
                            <i class="ri-database-2-line"></i>
                            <h4><a href="#">Kualitas Data</a></h4>
                            <p>Berdasarkan data dari sumber yang terpercaya, sehingga menghasilkan prediksi yang akurat.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-left"  data-aos-duration="1200">
                        <div class="icon-box">
                            <i class="ri-device-line"></i>
                            <h4><a href="#">Kompatibilitas Perangkat</a></h4>
                            <p>Dapat diakses melalui berbagai perangkat, mulai dari smartphone, tablet, sampai komputer desktop.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
