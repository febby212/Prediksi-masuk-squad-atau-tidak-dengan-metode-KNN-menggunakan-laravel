@extends('layout.userlay')

@section('konten')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Panduan</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Panduan</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-right"  data-aos-duration="500">
                    {{-- <h2>How to Use</h2> --}}
                    <p>Cara menggunakan fitur prediksi</p>
                </div>

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4  data-aos="fade-right"  data-aos-duration="300">1. Silahkan <a href="/login"><b class="warna">Login</b></a> terlebih dahulu</h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Untuk menggunakan fitur Prediksi, Anda diharuskan login terlebih dahulu. Silahkan login <a href="/login"><b class="warna">disini</b></a>
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4 data-aos="fade-right"  data-aos-duration="300">2. Pilih menu <a href="/knn" class="warna"><b>Predict</b></a></h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Proses prediksi dilakukan pada menu <b class="warna">Predict</b>. Jadi, silahkan pilih menu <b class="warna">Predict</b> setelah login`
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4 data-aos="fade-right"  data-aos-duration="300">3. Masukkan data kriteria yang akan diprediksi</h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Setelah masuk di menu <b class="warna">Predict</b>, silahkan isi data pemain yang akan diprediksi. Isi data sesuai dengan kriteria dan kemampuan dari pemain.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4 data-aos="fade-right"  data-aos-duration="300">4. Mendapat kesulitan dengan data yang akan dimasukkan</h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Jika anda mendapatkan kesulitan dengan data yang akan dimasukkan, silahkan cek dibawah form untuk melihat data apa saja yang harus dimasukkan.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4 data-aos="fade-right"  data-aos-duration="300">5. Data sudah dimasukkan</h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Jika data sudah dimasukkan, Terima hasinya dengan lapang dada. 
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch">
                    <div class="col-lg-5">
                        <h4 data-aos="fade-right"  data-aos-duration="300">6. Hasil prediksi</h4>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-left"  data-aos-duration="300">
                            Hasil prediski berupa presentase dan keterangan masuk kriteria squad atau tidak serta data pemain yang memiliki atribut yang mirip dengan data pemain yang anda masukkan.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
