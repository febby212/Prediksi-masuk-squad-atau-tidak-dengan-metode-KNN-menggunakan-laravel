@extends('layout.adminlay')

@section('konten')
    <main id="main" class="main">

        <div class="pagetitle">

            @if ($testData['posisi'] === 'penyerang')
                <h1>Hasil Prediksi Pemain Penyerang</h1>
            @elseif ($testData['posisi'] === 'gelandang')
                <h1>Hasil Prediksi Pemain Gelandang</h1>
            @elseif ($testData['posisi'] === 'bertahan')
                <h1>Hasil Prediksi Pemain Bertahan</h1>
            @else
                <h1>Hasil Prediksi Pemain Gk</h1>
            @endif

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>

                    @if ($testData['posisi'] === 'penyerang')
                        <li class="breadcrumb-item"><a href="/prediksiPenyerang">Prediksi Penyerang</a></li>
                    @elseif ($testData['posisi'] === 'gelandang')
                        <li class="breadcrumb-item"><a href="/prediksiGelandang">Prediksi Gelandang</a></li>
                    @elseif ($testData['posisi'] === 'bertahan')
                        <li class="breadcrumb-item"><a href="/prediksiBertahan">Prediksi Bertahan</a></li>
                    @else
                        <li class="breadcrumb-item"><a href="/prediksiGk">Prediksi GK</a></li>
                    @endif
                    <li class="breadcrumb-item active">Hasil</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bordered Tabs Justified</h5>

                <!-- Bordered Tabs Justified -->
                <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                    <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                            aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#bordered-justified-profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">Data</button>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                    <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel"
                        aria-labelledby="home-tab">
                        Data pemain yang anda masukkan
                        <b>{{ $prediction === 'YA' ? 'Masuk kriteria' : 'Tidak masuk kriteria' }}</b> dengan presentase
                        sebesar <b>{{ $percentage }}%</b> dan nilai K sebanyak <b> {{ $testData['kDekat'] }} </b>. Preview
                        data yang anda masukkan:<br>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama</div>
                            <div class="col-lg-9 col-md-8 text-capitalize">:<b> {{ $testData['nama'] }} </b></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Umur</div>
                            <div class="col-lg-9 col-md-8">: {{ $testData['umur'] }} Tahun</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Tinggi</div>
                            <div class="col-lg-9 col-md-8">: {{ $testData['tinggi'] }} CM</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Kaki Utama</div>
                            <div class="col-lg-9 col-md-8">: {{ $testData['kaki_utama'] === '1' ? 'Kanan' : 'Kiri' }}</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        @if ($testData['posisi'] === 'gk')
                            <h4>Data yang anda masukkan:</h4>
                            <table class="table table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Umur</th>
                                        <th class="text-center" scope="col">BB</th>
                                        <th class="text-center" scope="col">Tinggi</th>
                                        <th class="text-center" scope="col">Kaki</th>
                                        <th class="text-center" scope="col">Diving</th>
                                        <th class="text-center" scope="col">Handling</th>
                                        <th class="text-center" scope="col">Kicking</th>
                                        <th class="text-center" scope="col">Reflexes</th>
                                        <th class="text-center" scope="col">Speed</th>
                                        <th class="text-center" scope="col">Positioning</th>
                                        <th class="text-center" scope="col">Overall</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $testData['nama'] }}</td>
                                        <td class="text-center">{{ $testData['umur'] }} Thn</td>
                                        <td class="text-center">{{ $testData['berat_badan'] }} Kg</td>
                                        <td class="text-center">{{ $testData['tinggi'] }} Cm</td>
                                        <td class="text-center">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}</td>
                                        <td class="text-center">{{ $testData['diving'] }}</td>
                                        <td class="text-center">{{ $testData['handling'] }}</td>
                                        <td class="text-center">{{ $testData['kicking'] }}</td>
                                        <td class="text-center">{{ $testData['reflexes'] }}</td>
                                        <td class="text-center">{{ $testData['speed'] }}</td>
                                        <td class="text-center">{{ $testData['positioning'] }}</td>
                                        <td class="text-center">{{ $testData['overall'] }}</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Pemain Terdekat:</h4>

                            <table class="table table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Umur</th>
                                        <th class="text-center" scope="col">BB</th>
                                        <th class="text-center" scope="col">Tinggi</th>
                                        <th class="text-center" scope="col">Kaki</th>
                                        <th class="text-center" scope="col">Diving</th>
                                        <th class="text-center" scope="col">Handling</th>
                                        <th class="text-center" scope="col">Kicking</th>
                                        <th class="text-center" scope="col">Reflexes</th>
                                        <th class="text-center" scope="col">Speed</th>
                                        <th class="text-center" scope="col">Positioning</th>
                                        <th class="text-center" scope="col">Overall</th>
                                        <th class="text-center" scope="col">Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nearestPlayers as $player)
                                        <tr>
                                            <td>{{ $player->nama }}</td>
                                            <td>{{ $player->umur }}</td>
                                            <td>{{ $player->berat_badan }}</td>
                                            <td>{{ $player->tinggi }}</td>
                                            <td>{{ $player->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</td>
                                            <td>{{ $player->diving }}</td>
                                            <td>{{ $player->handling }}</td>
                                            <td>{{ $player->kicking }}</td>
                                            <td>{{ $player->reflexes }}</td>
                                            <td>{{ $player->speed }}</td>
                                            <td>{{ $player->positioning }}</td>
                                            <td>{{ $player->overall }}</td>
                                            <td>{{ $player->masuk_squad }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4>Data yang anda masukkan:</h4>
                            <table class="table table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Umur</th>
                                        <th class="text-center" scope="col">BB</th>
                                        <th class="text-center" scope="col">Tinggi</th>
                                        <th class="text-center" scope="col">Kaki</th>
                                        <th class="text-center" scope="col">Pace</th>
                                        <th class="text-center" scope="col">Shooting</th>
                                        <th class="text-center" scope="col">Passing</th>
                                        <th class="text-center" scope="col">Dribbling</th>
                                        <th class="text-center" scope="col">Defending</th>
                                        <th class="text-center" scope="col">Physical</th>
                                        <th class="text-center" scope="col">Overall</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $testData['nama'] }}</td>
                                        <td class="text-center">{{ $testData['umur'] }} Thn</td>
                                        <td class="text-center">{{ $testData['berat_badan'] }} Kg</td>
                                        <td class="text-center">{{ $testData['tinggi'] }} Cm</td>
                                        <td class="text-center">{{ $testData['kaki_utama'] === 1 ? 'Kanan' : 'Kiri' }}
                                        </td>
                                        <td class="text-center">{{ $testData['pace'] }}</td>
                                        <td class="text-center">{{ $testData['shooting'] }}</td>
                                        <td class="text-center">{{ $testData['passing'] }}</td>
                                        <td class="text-center">{{ $testData['dribbling'] }}</td>
                                        <td class="text-center">{{ $testData['defending'] }}</td>
                                        <td class="text-center">{{ $testData['physical'] }}</td>
                                        <td class="text-center">{{ $testData['overall'] }}</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Pemain Terdekat:</h4>

                            <table class="table table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Umur</th>
                                        <th class="text-center" scope="col">BB</th>
                                        <th class="text-center" scope="col">Tinggi</th>
                                        <th class="text-center" scope="col">Kaki</th>
                                        <th class="text-center" scope="col">Pace</th>
                                        <th class="text-center" scope="col">Shooting</th>
                                        <th class="text-center" scope="col">Passing</th>
                                        <th class="text-center" scope="col">Dribbling</th>
                                        <th class="text-center" scope="col">Defending</th>
                                        <th class="text-center" scope="col">Physical</th>
                                        <th class="text-center" scope="col">Overall</th>
                                        <th class="text-center" scope="col">Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nearestPlayers as $player)
                                        <tr>
                                            <td>{{ $player->nama }}</td>
                                            <td>{{ $player->umur }}</td>
                                            <td>{{ $player->berat_badan }}</td>
                                            <td>{{ $player->tinggi }}</td>
                                            <td>{{ $player->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</td>
                                            <td>{{ $player->pace }}</td>
                                            <td>{{ $player->shooting }}</td>
                                            <td>{{ $player->passing }}</td>
                                            <td>{{ $player->dribbling }}</td>
                                            <td>{{ $player->defending }}</td>
                                            <td>{{ $player->physical }}</td>
                                            <td>{{ $player->overall }}</td>
                                            <td>{{ $player->masuk_squad }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div><!-- End Bordered Tabs Justified -->

            </div>
        </div>

    </main><!-- End #main -->
@endsection
