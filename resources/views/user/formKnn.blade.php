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
                    <h3>Silahkan masukkan data pemain <b>Penyerang</b> yang akan diprediksi</h3>
                    <h5 class="sulit">Jika Anda kesulitan terkait atribut yang perlu dimasukkan, bisa cek <a
                            href="#features" class="warna miring">disini</a></h5>
                </div>

                <div>
                    <form action="{{ route('predict.penyerang') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="namaPemain" class="form-label">Nama Pemain</label>
                            <input type="text" class="form-control border border-2" id="inputAddress"
                                placeholder="Contoh: Bukayo Saka" name="nama">
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
                            <label for="inputZip" class="form-label">Pace</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="pace"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Shooting</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="shooting"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Passing</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="passing"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Dribbling</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="dribbling"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Defending</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="defending"
                                placeholder="Contoh: 78">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Physical</label>
                            <input type="number" class="form-control border border-2" id="inputZip" name="physical"
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

                        <input type="hidden" id="inputZip" name="posisi" value="penyerang">

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
                    <p>Pemain Penyerang</p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-3">PAC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">SHO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">PAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">DRI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">DEF</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">PHY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Overall</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pace (PAC)</h3>
                                        <p><b>Pace atau Kecepatan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kecepatan akselerasi:</b> Kemampuan pemain untuk mencapai kecepatan
                                                    maksimal dalam waktu singkat.</p>
                                            </li>
                                            <li>
                                                <p><b>Kecepatan sprint:</b> Kecepatan maksimal yang dapat dicapai oleh
                                                    pemain
                                                    saat berlari dalam jarak pendek.</p>
                                            </li>
                                            <li>
                                                <p><b>Kecepatan reaksi:</b> Kemampuan pemain untuk merespons perubahan
                                                    situasi
                                                    dan bergerak dengan cepat.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Shooting (SHO)</h3>
                                        <p><b>Shooting atau Tembakan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kemampuan tembakan akurat:</b> Tingkat keakuratan tembakan pemain
                                                    menuju
                                                    sasaran.</p>
                                            </li>
                                            <li>
                                                <p><b>Power tembakan:</b> Kekuatan tembakan yang dapat dihasilkan pemain.
                                                </p>
                                            </li>
                                            <li>
                                                <p><b>Kemampuan tembakan kaki kiri dan kanan:</b> Keahlian pemain dalam
                                                    melakukan tembakan dengan kaki kiri dan kanan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Passing (PAS)</h3>
                                        <p><b>Passing atau Umpan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kemampuan umpan akurat:</b> Tingkat keakuratan umpan pemain saat
                                                    mengirimkan bola kepada rekan setim.</p>
                                            </li>
                                            <li>
                                                <p><b>Kemampuan umpan panjang:</b> Keahlian pemain dalam melakukan umpan
                                                    jarak
                                                    jauh.</p>
                                            </li>
                                            <li>
                                                <p><b>Kemampuan umpan silang:</b> Kemampuan pemain untuk melakukan umpan ke
                                                    dalam kotak penalti dari sisi lapangan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Dribbling (DRI)</h3>
                                        <p><b>Dribbling atau Dribel</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Keterampilan menggiring bola:</b> Kemampuan pemain untuk mengendalikan
                                                    bola saat bergerak dengan cepat.</p>
                                            </li>
                                            <li>
                                                <p><b>Kemampuan bergerak mengelabui:</b> Keahlian pemain dalam melakukan
                                                    gerakan-gerakan dribel yang mengelabui lawan.</p>
                                            </li>
                                            <li>
                                                <p><b>Keterampilan mempertahankan bola:</b> Kemampuan pemain untuk menjaga
                                                    bola
                                                    saat mendapat tekanan dari lawan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Defending (DEF)</h3>
                                        <p><b>Defending atau Pertahanan</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Tackling:</b> Kemampuan pemain dalam melakukan tackling untuk merebut
                                                    bola
                                                    dari lawan.</p>
                                            </li>
                                            <li>
                                                <p><b>Marking:</b> Kemampuan pemain untuk mengawasi dan menghalangi
                                                    pergerakan
                                                    lawan.</p>
                                            </li>
                                            <li>
                                                <p><b>Intersepsi:</b> Keahlian pemain dalam membaca pergerakan bola dan
                                                    melakukan intersepsi untuk menghentikan serangan lawan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-7">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Physical (PHY)</h3>
                                        <p><b>Physical atau FIsik</b> merupakan kemampuan dari pemain yang meliputi:
                                        <ul>
                                            <li>
                                                <p><b>Kekuatan fisik:</b> Tingkat kekuatan dan daya tahan tubuh pemain.</p>
                                            </li>
                                            <li>
                                                <p><b>Kecepatan fisik:</b> Kemampuan pemain dalam bergerak secara fisik,
                                                    seperti
                                                    lari, melompat, atau berduel.</p>
                                            </li>
                                            <li>
                                                <p><b>Tahanan tekanan:</b> Kemampuan pemain untuk bertahan dan tetap tenang
                                                    dalam situasi tekanan dari lawan.</p>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-8">
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
