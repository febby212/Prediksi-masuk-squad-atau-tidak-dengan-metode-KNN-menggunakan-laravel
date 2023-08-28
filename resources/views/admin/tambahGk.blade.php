@extends('layout.adminlay')

@section('konten')
    @if ($message = session('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Tambah Data Pemain Gk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Tambah Data</li>
                    <li class="breadcrumb-item active">Gk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Masukkan Penilaian Atribut Pemain</h5>

                    <!-- Multi Columns Form -->
                    <form class="row g-3" action="/gk" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Nama Pemain</label>
                            <input type="text" class="form-control" name="nama" id="inputName5"
                                placeholder="Contoh: G. Donnaruma">
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
                        <div class="col-3">
                            <label for="inputAddress5" class="form-label">Diving</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="diving"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress5" class="form-label">Handling</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="handling"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress5" class="form-label">kicking</label>
                            <input type="number" class="form-control" id="inputAddres5s" name="kicking"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Reflexes</label>
                            <input type="number" class="form-control" id="inputAddress2" name="reflexes"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Speed</label>
                            <input type="number" class="form-control" id="inputAddress2" name="speed"
                                placeholder="Contoh: 70">
                            <div id="passwordHelpBlock" class="form-text">
                                Masukkan angka 0-100.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputAddress2" class="form-label">Positioning</label>
                            <input type="text" class="form-control" id="inputAddress2" name="positioning"
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
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Masuk Squad</label>
                            <select id="inputState" class="form-select" name="masuk_squad">
                                <option selected value="YA">MASUK</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
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
