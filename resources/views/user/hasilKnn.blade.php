@extends('layout.userlay')

@section('konten')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hasil Prediksi</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Predict</a></li>
                        <li>Hasil</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                @if ($testData['posisi'] === 'penyerang')
                    <div class="section-title">
                        <h2>HASIL</h2>
                        <p>Hasil Prediksi pemain penyerang</p>
                    </div>
                @elseif ($testData['posisi'] === 'tengah')
                    <div class="section-title">
                        <h2>HASIL</h2>
                        <p>Hasil Prediksi pemain tengah atau gelandang</p>
                    </div>
                @elseif ($testData['posisi'] === 'bek')
                    <div class="section-title">
                        <h2>HASIL</h2>
                        <p>Hasil Prediksi pemain Bertahan</p>
                    </div>
                @else
                    <div class="section-title">
                        <h2>HASIL</h2>
                        <p>Hasil Prediksi pemain Penjaga gawang</p>
                    </div>
                @endif


                @if ($prediction === 'YA')
                    <div class="mb-5 border border-success border-3 jarak">
                        <h5>Selamat coach! Pemain yang Anda prediksi <b class="badge bg-success rounded-pill">masuk ke dalam
                                kriteria squad</b> dengan persentase sebesar
                            <b class="badge bg-success rounded-pill">{{ $percentage }}%</b> dan
                            data yang coach masukkan bisa dilihat dibawah ini:
                        </h5>
                    </div>
                @else
                    <div class="mb-5 border border-danger border-3 jarak">
                        <h5>Maaf coach! Pemain yang Anda prediksi <b class="badge bg-danger rounded-pill">tidak masuk ke
                                dalam
                                kriteria squad</b> dengan persentase sebesar
                            <b class="badge bg-danger rounded-pill">{{ $percentage }}%</b> dan
                            data yang coach masukkan bisa dilihat dibawah ini:
                        </h5>
                    </div>
                @endif

                @if ($prediction === 'YA')
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="testimonial-item">
                                <h3>{{ $testData['nama'] }}</h3>
                                @if ($testData['posisi'] === 'penyerang')
                                    <h4>Penyerang</h4>
                                @elseif ($testData['posisi'] === 'gelandang')
                                    <h4>Gelandang</h4>
                                @elseif ($testData['posisi'] === 'bertahan')
                                    <h4>Bertahan</h4>
                                @else
                                    <h4>Penjaga Gawang</h4>
                                @endif

                                @if ($testData['posisi'] === 'gk')
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Umur
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['umur'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Berat Badan
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['berat_badan'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Tinggi
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['tinggi'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kaki Utama
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Diving
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['diving'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Handing
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['handling'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kicking
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['kicking'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Reflexes
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['reflexes'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Speed
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['speed'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Positioning
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['positioning'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Overall
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['overall'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Umur
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['umur'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Berat Badan
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['berat_badan'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Tinggi
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['tinggi'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kaki Utama
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Pace
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['pace'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Shooting
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['shooting'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Passing
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['passing'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Dribbling
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['dribbling'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Defending
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['defending'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Physical
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['physical'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Overall
                                                    <span
                                                        class="badge bg-success rounded-pill">{{ $testData['overall'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="testimonial-item">
                                <h3>{{ $testData['nama'] }}</h3>
                                @if ($testData['posisi'] === 'penyerang')
                                    <h4>Penyerang</h4>
                                @elseif ($testData['posisi'] === 'gelandang')
                                    <h4>Gelandang</h4>
                                @elseif ($testData['posisi'] === 'bertahan')
                                    <h4>Bertahan</h4>
                                @else
                                    <h4>Penjaga Gawang</h4>
                                @endif

                                @if ($testData['posisi'] === 'gk')
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Umur
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['umur'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Berat Badan
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['berat_badan'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Tinggi
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['tinggi'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kaki Utama
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Diving
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['diving'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Handing
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['handling'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kicking
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['kicking'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Reflexes
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['reflexes'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Speed
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['speed'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Positioning
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['positioning'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Overall
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['overall'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Umur
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['umur'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Berat Badan
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['berat_badan'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Tinggi
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['tinggi'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Kaki Utama
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Pace
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['pace'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Shooting
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['shooting'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Passing
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['passing'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Dribbling
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['dribbling'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Defending
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['defending'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Physical
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['physical'] }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Overall
                                                    <span
                                                        class="badge bg-danger rounded-pill">{{ $testData['overall'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
