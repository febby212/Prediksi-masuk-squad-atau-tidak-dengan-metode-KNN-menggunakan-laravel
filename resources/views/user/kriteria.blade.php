@extends('layout.userlay')
@section('konten')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kriteria Data</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Data Criteria</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= explanation Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>Kriteria Data</h2>
                <p>Pemain Penyerang, Tengah, & belakang</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Contoh Data Pemain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">PAC</a>
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
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details">
                                    <h3>Contoh Data Pemain</h3>
                                    <p class="fst-italic">
                                    <div class="container">
                                        <table class="table table-hover">
                                            <thead class="table-success">
                                                <tr>
                                                    {{-- <th class="text-center" scope="col">No</th> --}}
                                                    <th class="text-center" scope="col">Nama</th>
                                                    <th class="text-center" scope="col">Umur</th>
                                                    <th class="text-center" scope="col">BB</th>
                                                    <th class="text-center" scope="col">Tinggi</th>
                                                    <th class="text-center" scope="col">Kaki</th>
                                                    <th class="text-center" scope="col">PAC</th>
                                                    <th class="text-center" scope="col">SHO</th>
                                                    <th class="text-center" scope="col">PAS</th>
                                                    <th class="text-center" scope="col">DRI</th>
                                                    <th class="text-center" scope="col">DEF</th>
                                                    <th class="text-center" scope="col">PHY</th>
                                                    <th class="text-center" scope="col">Overall</th>
                                                    <th class="text-center" scope="col">Squad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pemain as $p)
                                                    <tr>
                                                        {{-- <th class="text-center" scope="row">{{ $p->id }}</th> --}}
                                                        <td>{{ $p->nama }}</td>
                                                        <td class="text-center">{{ $p->umur }} Thn</td>
                                                        <td class="text-center">{{ $p->berat_badan }} Kg</td>
                                                        <td class="text-center">{{ $p->tinggi }} Cm</td>
                                                        <td class="text-center">{{ $p->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</td>
                                                        <td class="text-center">{{ $p->pace }}</td>
                                                        <td class="text-center">{{ $p->shooting }}</td>
                                                        <td class="text-center">{{ $p->passing }}</td>
                                                        <td class="text-center">{{ $p->dribbling }}</td>
                                                        <td class="text-center">{{ $p->defending }}</td>
                                                        <td class="text-center">{{ $p->physical }}</td>
                                                        <td class="text-center">{{ $p->overall }}</td>
                                                        <td class="text-center">{{ $p->masuk_squad }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
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
                                            <p><b>Kecepatan sprint:</b> Kecepatan maksimal yang dapat dicapai oleh pemain
                                                saat berlari dalam jarak pendek.</p>
                                        </li>
                                        <li>
                                            <p><b>Kecepatan reaksi:</b> Kemampuan pemain untuk merespons perubahan situasi
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
                                            <p><b>Kemampuan tembakan akurat:</b> Tingkat keakuratan tembakan pemain menuju
                                                sasaran.</p>
                                        </li>
                                        <li>
                                            <p><b>Power tembakan:</b> Kekuatan tembakan yang dapat dihasilkan pemain.</p>
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
                                            <p><b>Kemampuan umpan panjang:</b> Keahlian pemain dalam melakukan umpan jarak
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
                                            <p><b>Keterampilan mempertahankan bola:</b> Kemampuan pemain untuk menjaga bola
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
                                            <p><b>Tackling:</b> Kemampuan pemain dalam melakukan tackling untuk merebut bola
                                                dari lawan.</p>
                                        </li>
                                        <li>
                                            <p><b>Marking:</b> Kemampuan pemain untuk mengawasi dan menghalangi pergerakan
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
                                            <p><b>Kecepatan fisik:</b> Kemampuan pemain dalam bergerak secara fisik, seperti
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
                                        Atribut ini mencerminkan tingkat keseluruhan kualitas pemain dalam berbagai aspek
                                        permainan.
                                        Biasanya, atribut Overall digunakan untuk membandingkan dan menilai pemain secara
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
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-11">Contoh Data Pemain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-13">DIV</a>
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
                        <div class="tab-pane active show" id="tab-11">
                            <div class="row">
                                <div class="col-lg-8 details">
                                    <h3>Contoh Data Pemain</h3>
                                    <p class="fst-italic">
                                    <div class="container">
                                        <table class="table table-hover">
                                            <thead class="table-success">
                                                <tr>
                                                    {{-- <th class="text-center" scope="col">No</th> --}}
                                                    <th class="text-center" scope="col">Nama</th>
                                                    <th class="text-center" scope="col">Umur</th>
                                                    <th class="text-center" scope="col">BB</th>
                                                    <th class="text-center" scope="col">Tinggi</th>
                                                    <th class="text-center" scope="col">Kaki</th>
                                                    <th class="text-center" scope="col">DIV</th>
                                                    <th class="text-center" scope="col">HAN</th>
                                                    <th class="text-center" scope="col">KIC</th>
                                                    <th class="text-center" scope="col">REF</th>
                                                    <th class="text-center" scope="col">SPD</th>
                                                    <th class="text-center" scope="col">POS</th>
                                                    <th class="text-center" scope="col">Overall</th>
                                                    <th class="text-center" scope="col">Squad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($gk as $g)
                                                    <tr>
                                                        {{-- <th class="text-center" scope="row">{{ $p->id }}</th> --}}
                                                        <td>{{ $g->nama }}</td>
                                                        <td class="text-center">{{ $g->umur }} Thn</td>
                                                        <td class="text-center">{{ $g->berat_badan }} Kg</td>
                                                        <td class="text-center">{{ $g->tinggi }} Cm</td>
                                                        <td class="text-center">{{ $g->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</td>
                                                        <td class="text-center">{{ $g->diving }}</td>
                                                        <td class="text-center">{{ $g->handling }}</td>
                                                        <td class="text-center">{{ $g->kicking }}</td>
                                                        <td class="text-center">{{ $g->reflexes }}</td>
                                                        <td class="text-center">{{ $g->speed }}</td>
                                                        <td class="text-center">{{ $g->positioning }}</td>
                                                        <td class="text-center">{{ $g->overall }}</td>
                                                        <td class="text-center">{{ $g->masuk_squad }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-13">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Diving (DIV)</h3>
                                    <p><b>Diving atau Lompatan</b> merupakan kemampuan dari pemain yang meliputi:
                                    <ul>
                                        <li>
                                            <p><b>Kemampuan Menyelam:</b> Penjaga gawang dalam melompat atau terjun ke arah bola untuk menyelamatkannya. </p>
                                        </li>
                                        <li>
                                            <p><b>Penyelamatan dengan Tubuh Penuh:</b> Penjaga gawang untuk melakukan penyelamatan dengan tubuh penuh, termasuk melompat atau terjun dengan menggabungkan gerakan tangan, kaki, dan tubuh secara keseluruhan. </p>
                                        </li>
                                        <li>
                                            <p><b>Menyelamatkan Tembakan yang Rendah:</b> Penyelamatan tembakan rendah yang mengarah ke sudut bawah gawang.  </p>
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
                                    <p><b>Handling atau Penaganan Bola</b> merupakan kemampuan dari pemain yang meliputi:
                                    <ul>
                                        <li>
                                            <p><b>Penyelamatan Bola:</b> Penjaga gawang dapat menangkap atau menahan bola setelah melakukan penyelamatan. </p>
                                        </li>
                                        <li>
                                            <p><b>Menahan Bola dalam Situasi Sulit:</b> Penjaga gawang untuk mengendalikan bola dengan baik dalam situasi tekanan atau saat ada banyak pemain lawan di sekitarnya.</p>
                                        </li>
                                        <li>
                                            <p><b>Respons Terhadap Bola yang Memantul:</b> Penjaga gawang untuk merespons dengan cepat bola yang memantul setelah penyelamatan awal. </p>
                                        </li>
                                        <li>
                                            <p><b>Respons Terhadap Bola yang Memantul:</b> Penjaga gawang untuk merespons dengan cepat bola yang memantul setelah penyelamatan awal. </p>
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
                                            <p><b>Kemampuan tendangan jauh:</b> Kicking menunjukkan kemampuan penjaga gawang dalam melakukan tendangan jauh atau melepaskan bola dari area gawang.</p>
                                        </li>
                                        <li>
                                            <p><b>Ketepatan dan Presisi:</b> Atribut Kicking juga mencerminkan ketepatan dan presisi penjaga gawang dalam melepaskan bola.</p>
                                        </li>
                                        <li>
                                            <p><b>Bola Mati:</b> Atribut Kicking juga berperan dalam kemampuan penjaga gawang dalam melepaskan bola mati, seperti tendangan gawang langsung atau tendangan pojok. </p>
                                        </li>
                                        <li>
                                            <p><b>Distribusi Bola:</b> Kicking juga penting untuk distribusi bola yang baik dari area gawang. </p>
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
                                            <p><b>Reaksi Terhadap Tembakan:</b> Reflexes mencerminkan kemampuan penjaga gawang untuk bereaksi dengan cepat terhadap tembakan lawan.</p>
                                        </li>
                                        <li>
                                            <p><b>Penangkapan Bola:</b> Atribut Reflexes juga berhubungan dengan kemampuan penjaga gawang dalam menangkap bola. </p>
                                        </li>
                                        <li>
                                            <p><b>Pengambilan Keputusan:</b> Atribut Reflexes juga mencakup kemampuan penjaga gawang dalam mengambil keputusan dengan cepat dalam situasi yang dinamis di lapangan.</p>
                                        </li>
                                        <li>
                                            <p><b>Penangkapan Bola:</b> Atribut Reflexes juga mencerminkan kecepatan penjaga gawang dalam merespons dan mengambil tindakan.</p>
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
                                            <p><b>Kecepatan Lari:</b> Atribut Speed menggambarkan kemampuan penjaga gawang dalam berlari dengan cepat di sekitar area gawang.</p>
                                        </li>
                                        <li>
                                            <p><b>Kelincahan:</b> Kelincahan mencakup kemampuan penjaga gawang dalam mengubah arah gerakan dengan cepat dan bergerak secara lincah di sekitar gawang. </p>
                                        </li>
                                        <li>
                                            <p><b>Penjaga Gawang Sweeper (Sweeper Keeper):</b> Ikut bertanggung jawab dalam menjaga gawang tetapi juga berperan sebagai pemain bertahan tambahan di belakang pertahanan.</p>
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
                                            <p><b>Penempatan yang Tepat:</b> Atribut Positioning mencerminkan kemampuan penjaga gawang dalam menempatkan diri dengan benar di dalam area gawang. </p>
                                        </li>
                                        <li>
                                            <p><b>Pembacaan Permainan:</b> Mampu memprediksi gerakan pemain lawan, mengenali pola serangan, dan mengantisipasi arah tembakan. </p>
                                        </li>
                                        <li>
                                            <p><b>Menjaga Jarak:</b> Memperkirakan jarak yang optimal untuk mengurangi kemungkinan bola melewati mereka atau menghindari situasi ofside. </p>
                                        </li>
                                        <li>
                                            <p><b>Penempatan Set-Pieces:</b> Penjaga gawang harus dapat menempatkan diri di posisi yang strategis untuk menghadapi tembakan atau menyapu bola yang datang dari situasi tersebut.</p>
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
                                        Atribut ini mencerminkan tingkat keseluruhan kualitas pemain dalam berbagai aspek
                                        permainan.
                                        Biasanya, atribut Overall digunakan untuk membandingkan dan menilai pemain secara
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
@endsection
