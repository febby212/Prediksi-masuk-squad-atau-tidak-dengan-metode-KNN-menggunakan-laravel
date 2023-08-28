@extends('layout.adminlay')

@section('konten')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Prediksi Pemain Bertahan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Prediksi Bertahan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Masukkan Nilai Atribut Pemain</h5>

                    <!-- Multi Columns Form -->
                    <form class="row g-3" action="/adminPrediksiBertahan" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Nama Pemain</label>
                            <input type="text" class="form-control" name="nama" id="inputName5"
                                placeholder="Contoh: Dani Pedrosa">
                        </div>
                        <div class="col-md-6">
                            <label for="inputName51" class="form-label">Nilai K Terdekat</label>
                            <input type="number" class="form-control" name="kDekat" id="inputName51"
                                placeholder="Contoh: 5">
                            <div id="passwordHelpBlock" class="form-text">
                                Nilai ganjil dan lebih dari 3 dan kurang dari 13.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail5" class="form-label">Umur</label>
                            <input type="number" class="form-control" name="umur" id="inputEmail5">
                        </div>
                        <div class="col-md-4">
                            <label for="beratbadan" class="form-label">Berat Badan</label>
                            <input type="number" class="form-control" name="berat_badan" id="beratbadan">
                        </div>
                        <div class="col-md-4">
                            <label for="tinggi" class="form-label">Tinggi</label>
                            <input type="number" class="form-control" name="tinggi" id="tinggi">
                        </div>
                        <fieldset class="row my-3">
                            <legend class="col-form-label col-sm-2 pt-0">Kaki Utama</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kaki_utama" id="gridRadios1"
                                        value="1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Kanan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kaki_utama" id="gridRadios2"
                                        value="2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Kiri
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-4">
                            <label for="inputAddress5" class="form-label">Pace</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="pace"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="inputAddress5" class="form-label">Shooting</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="shooting"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="inputAddress5" class="form-label">Passing</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="passing"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Dribbling</label>
                            <input type="number" class="form-control" id="inputAddress2" name="dribbling"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Defending</label>
                            <input type="number" class="form-control" id="inputAddress2" name="defending"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Physical</label>
                            <input type="text" class="form-control" id="inputAddress2" name="physical"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Overall</label>
                            <input type="text" class="form-control" id="inputAddress2" name="overall"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>

                        <input type="hidden" name="posisi" value="bertahan">

                        <div class="d-flex justify-content-end text-center">
                            <button type="submit" class="btn btn-primary me-2 warna">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
