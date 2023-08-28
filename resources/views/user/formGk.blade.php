@extends('layout.userlay')

@section('konten')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Form Prediksi</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Predict</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    {{-- <h2>How to Use</h2> --}}
                    <h3>Silahkan masukkan data pemain <b>Penjaga Gawang</b> yang akan diprediksi</h3>
                    <h5 class="sulit">Jika Anda kesulitan terkait atribut yang perlu dimasukkan, bisa cek <a href="#features" class="warna miring">disini</a></h5>
                </div>

                <div>
                    <form action="{{ route('predict.gk') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="namaPemain" class="form-label">Nama Pemain</label>
                            <input type="text" class="form-control border border-2" id="inputAddress"
                                placeholder="Contoh: Aaron Ramsdale" name="nama">
                        </div>

                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Umur</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="umur"
                                placeholder="Contoh: 24">
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Berat Badan</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="berat_badan"
                                placeholder="Contoh: 80">
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Tinggi</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="tinggi"
                                placeholder="Contoh: 180">
                        </div>

                        <fieldset class="row mb-1 mt-4">
                            <legend class="col-form-label col-sm-2 pt-0">Kaki Utama</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" name="kaki_utama"
                                        id="gridRadios1" value="1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Kaki Kanan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" name="kaki_utama"
                                        id="gridRadios2" value="2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Kaki Kiri
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Diving</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="diving"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Handling</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="handling"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Kicking</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="kicking"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Reflexes</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="reflexes"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Speed</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="speed"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Positioning</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="positioning"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Overall</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="overall"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>

                        <input type="hidden" id="inputZip" name="posisi" value="gk">

                        <div class="col-12 mt-4 mb-1">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn tombol">Predict</button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= explanation Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kriteria Data</h2>
                    <p>Penjaga Gawang (GK)</p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-13">DIV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-14">HAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-15">KIC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-12">REF</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-16">SPD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-17">POS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-18">Overall</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-13">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Diving (DIV)</h3>
                                        <p><b>Diving atau Lompatan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kemampuan Menyelam:</b> Penjaga gawang dalam melompat atau terjun ke
                                                    arah bola untuk menyelamatkannya. </p>
                                            </li>
                                            <li>
                                                <p><b>Penyelamatan dengan Tubuh Penuh:</b> Penjaga gawang untuk melakukan
                                                    penyelamatan dengan tubuh penuh, termasuk melompat atau terjun dengan
                                                    menggabungkan gerakan tangan, kaki, dan tubuh secara keseluruhan. </p>
                                            </li>
                                            <li>
                                                <p><b>Menyelamatkan Tembakan yang Rendah:</b> Penyelamatan tembakan rendah
                                                    yang mengarah ke sudut bawah gawang. </p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-14">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Handling (HAN)</h3>
                                        <p><b>Handling atau Penaganan Bola</b> merupakan kemampuan dari pemain yang
                                            meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Penyelamatan Bola:</b> Penjaga gawang dapat menangkap atau menahan
                                                    bola setelah melakukan penyelamatan. </p>
                                            </li>
                                            <li>
                                                <p><b>Menahan Bola dalam Situasi Sulit:</b> Penjaga gawang untuk
                                                    mengendalikan bola dengan baik dalam situasi tekanan atau saat ada
                                                    banyak pemain lawan di sekitarnya.</p>
                                            </li>
                                            <li>
                                                <p><b>Respons Terhadap Bola yang Memantul:</b> Penjaga gawang untuk
                                                    merespons dengan cepat bola yang memantul setelah penyelamatan awal.
                                                </p>
                                            </li>
                                            <li>
                                                <p><b>Respons Terhadap Bola yang Memantul:</b> Penjaga gawang untuk
                                                    merespons dengan cepat bola yang memantul setelah penyelamatan awal.
                                                </p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-15">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Kicking (KIC) </h3>
                                        <p><b>Kicking atau Tendangan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kemampuan tendangan jauh:</b> Kicking menunjukkan kemampuan penjaga
                                                    gawang dalam melakukan tendangan jauh atau melepaskan bola dari area
                                                    gawang.</p>
                                            </li>
                                            <li>
                                                <p><b>Ketepatan dan Presisi:</b> Atribut Kicking juga mencerminkan ketepatan
                                                    dan presisi penjaga gawang dalam melepaskan bola.</p>
                                            </li>
                                            <li>
                                                <p><b>Bola Mati:</b> Atribut Kicking juga berperan dalam kemampuan penjaga
                                                    gawang dalam melepaskan bola mati, seperti tendangan gawang langsung
                                                    atau tendangan pojok. </p>
                                            </li>
                                            <li>
                                                <p><b>Distribusi Bola:</b> Kicking juga penting untuk distribusi bola yang
                                                    baik dari area gawang. </p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-12">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Reflexes (REF)</h3>
                                        <p><b>Reflexes atau Reflek</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Reaksi Terhadap Tembakan:</b> Reflexes mencerminkan kemampuan penjaga
                                                    gawang untuk bereaksi dengan cepat terhadap tembakan lawan.</p>
                                            </li>
                                            <li>
                                                <p><b>Penangkapan Bola:</b> Atribut Reflexes juga berhubungan dengan
                                                    kemampuan penjaga gawang dalam menangkap bola. </p>
                                            </li>
                                            <li>
                                                <p><b>Pengambilan Keputusan:</b> Atribut Reflexes juga mencakup kemampuan
                                                    penjaga gawang dalam mengambil keputusan dengan cepat dalam situasi yang
                                                    dinamis di lapangan.</p>
                                            </li>
                                            <li>
                                                <p><b>Penangkapan Bola:</b> Atribut Reflexes juga mencerminkan kecepatan
                                                    penjaga gawang dalam merespons dan mengambil tindakan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-16">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Speed (SPD)</h3>
                                        <p><b>Speed atau Kecepatan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kecepatan Lari:</b> Atribut Speed menggambarkan kemampuan penjaga
                                                    gawang dalam berlari dengan cepat di sekitar area gawang.</p>
                                            </li>
                                            <li>
                                                <p><b>Kelincahan:</b> Kelincahan mencakup kemampuan penjaga gawang dalam
                                                    mengubah arah gerakan dengan cepat dan bergerak secara lincah di sekitar
                                                    gawang. </p>
                                            </li>
                                            <li>
                                                <p><b>Penjaga Gawang Sweeper (Sweeper Keeper):</b> Ikut bertanggung jawab
                                                    dalam menjaga gawang tetapi juga berperan sebagai pemain bertahan
                                                    tambahan di belakang pertahanan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-17">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Positioning (POS)</h3>
                                        <p><b>Positioning atau Pemosisian</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Penempatan yang Tepat:</b> Atribut Positioning mencerminkan kemampuan
                                                    penjaga gawang dalam menempatkan diri dengan benar di dalam area gawang.
                                                </p>
                                            </li>
                                            <li>
                                                <p><b>Pembacaan Permainan:</b> Mampu memprediksi gerakan pemain lawan,
                                                    mengenali pola serangan, dan mengantisipasi arah tembakan. </p>
                                            </li>
                                            <li>
                                                <p><b>Menjaga Jarak:</b> Memperkirakan jarak yang optimal untuk mengurangi
                                                    kemungkinan bola melewati mereka atau menghindari situasi ofside. </p>
                                            </li>
                                            <li>
                                                <p><b>Penempatan Set-Pieces:</b> Penjaga gawang harus dapat menempatkan diri
                                                    di posisi yang strategis untuk menghadapi tembakan atau menyapu bola
                                                    yang datang dari situasi tersebut.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-18">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Overall</h3>
                                        <p><b>Overall atau Keseluruhan</b> merupakan penilaian umum terhadap kemampuan dan
                                            kontribusi keseluruhan pemain dalam permainan.
                                            Atribut ini mencerminkan tingkat keseluruhan kualitas pemain dalam berbagai
                                            aspek
                                            permainan.
                                            Biasanya, atribut Overall digunakan untuk membandingkan dan menilai pemain
                                            secara
                                            keseluruhan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->
@endsection
