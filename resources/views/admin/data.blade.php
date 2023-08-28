@extends('layout.adminlay')

@section('konten')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Pemain</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Data Pemain</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
                    <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Data Pemain Penyerang</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">BB</th>
                                                <th scope="col">Tinggi</th>
                                                <th scope="col">Kaki</th>
                                                <th scope="col">PAC</th>
                                                <th scope="col">SHO</th>
                                                <th scope="col">PAS</th>
                                                <th scope="col">DRI</th>
                                                <th scope="col">DEF</th>
                                                <th scope="col">PHY</th>
                                                <th scope="col">OVR</th>
                                                <th scope="col">Masuk Squad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyerang as $p)
                                                <tr>
                                                    <th scope="row">{{ $p->nama }}</th>
                                                    <th scope="row">{{ $p->umur }}</th>
                                                    <th scope="row">{{ $p->berat_badan }}</th>
                                                    <th scope="row">{{ $p->tinggi }}</th>
                                                    <th scope="row">{{ $p->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</th>
                                                    <td class="text-center">{{{$p->pace}}}</td>
                                                    <td class="text-center">{{$p->shooting}}</td>
                                                    <td class="text-center">{{$p->passing}}</td>
                                                    <td class="text-center">{{$p->dribbling}}</td>
                                                    <td class="text-center">{{$p->defending}}</td>
                                                    <td class="text-center">{{$p->physical}}</td>
                                                    <td class="text-center">{{$p->overall}}</td>
                                                    <td><span class="d-flex justify-content-center badge {{$p->masuk_squad === 'YA' ? 'bg-success' : 'bg-danger'}}">{{$p->masuk_squad}}</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Data Pemain Gelandang</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">BB</th>
                                                <th scope="col">Tinggi</th>
                                                <th scope="col">Kaki</th>
                                                <th scope="col">PAC</th>
                                                <th scope="col">SHO</th>
                                                <th scope="col">PAS</th>
                                                <th scope="col">DRI</th>
                                                <th scope="col">DEF</th>
                                                <th scope="col">PHY</th>
                                                <th scope="col">OVR</th>
                                                <th scope="col">Masuk Squad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gelandang as $g)
                                                <tr>
                                                    <th scope="row">{{ $g->nama }}</th>
                                                    <th scope="row">{{ $g->umur }}</th>
                                                    <th scope="row">{{ $g->berat_badan }}</th>
                                                    <th scope="row">{{ $g->tinggi }}</th>
                                                    <th scope="row">{{ $g->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</th>
                                                    <td class="text-center">{{{$g->pace}}}</td>
                                                    <td class="text-center">{{$g->shooting}}</td>
                                                    <td class="text-center">{{$g->passing}}</td>
                                                    <td class="text-center">{{$g->dribbling}}</td>
                                                    <td class="text-center">{{$g->defending}}</td>
                                                    <td class="text-center">{{$g->physical}}</td>
                                                    <td class="text-center">{{$g->overall}}</td>
                                                    <td><span class="d-flex justify-content-center badge {{$g->masuk_squad === 'YA' ? 'bg-success' : 'bg-danger'}}">{{$g->masuk_squad}}</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Data Pemain Penyerang</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">BB</th>
                                                <th scope="col">Tinggi</th>
                                                <th scope="col">Kaki</th>
                                                <th scope="col">PAC</th>
                                                <th scope="col">SHO</th>
                                                <th scope="col">PAS</th>
                                                <th scope="col">DRI</th>
                                                <th scope="col">DEF</th>
                                                <th scope="col">PHY</th>
                                                <th scope="col">OVR</th>
                                                <th scope="col">Masuk Squad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bertahan as $b)
                                                <tr>
                                                    <th scope="row">{{ $b->nama }}</th>
                                                    <th scope="row">{{ $b->umur }}</th>
                                                    <th scope="row">{{ $b->berat_badan }}</th>
                                                    <th scope="row">{{ $b->tinggi }}</th>
                                                    <th scope="row">{{ $b->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</th>
                                                    <td class="text-center">{{{$b->pace}}}</td>
                                                    <td class="text-center">{{$b->shooting}}</td>
                                                    <td class="text-center">{{$b->passing}}</td>
                                                    <td class="text-center">{{$b->dribbling}}</td>
                                                    <td class="text-center">{{$b->defending}}</td>
                                                    <td class="text-center">{{$b->physical}}</td>
                                                    <td class="text-center">{{$b->overall}}</td>
                                                    <td><span class="d-flex justify-content-center badge {{$b->masuk_squad === 'YA' ? 'bg-success' : 'bg-danger'}}">{{$b->masuk_squad}}</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Data Pemain Penyerang</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">BB</th>
                                                <th scope="col">Tinggi</th>
                                                <th scope="col">Kaki</th>
                                                <th scope="col">DIV</th>
                                                <th scope="col">HAN</th>
                                                <th scope="col">KIC</th>
                                                <th scope="col">REF</th>
                                                <th scope="col">SPD</th>
                                                <th scope="col">POS</th>
                                                <th scope="col">OVR</th>
                                                <th scope="col">Masuk Squad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gk as $gk)
                                                <tr>
                                                    <th scope="row">{{ $gk->nama }}</th>
                                                    <th scope="row">{{ $gk->umur }}</th>
                                                    <th scope="row">{{ $gk->berat_badan }}</th>
                                                    <th scope="row">{{ $gk->tinggi }}</th>
                                                    <th scope="row">{{ $gk->kaki_utama === 1 ? 'Kanan' : 'Kiri' }}</th>
                                                    <td class="text-center">{{{$gk->diving}}}</td>
                                                    <td class="text-center">{{$gk->handling}}</td>
                                                    <td class="text-center">{{$gk->kicking}}</td>
                                                    <td class="text-center">{{$gk->reflexes}}</td>
                                                    <td class="text-center">{{$gk->speed}}</td>
                                                    <td class="text-center">{{$gk->positioning}}</td>
                                                    <td class="text-center">{{$gk->overall}}</td>
                                                    <td><span class="d-flex justify-content-center badge {{$gk->masuk_squad === 'YA' ? 'bg-success' : 'bg-danger'}}">{{$gk->masuk_squad}}</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
        </section>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Keterangan (Penyerang, Gelandang, Bertahan)</h5>

                    <!-- Bordered Tabs Justified -->
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-home" type="button" role="tab"
                                aria-controls="home" aria-selected="false" tabindex="-1">PAC</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="true">SHO</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab1" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-contact1" type="button" role="tab"
                                aria-controls="contact" aria-selected="false" tabindex="-1">PAS</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-contact" type="button" role="tab"
                                aria-controls="contact" aria-selected="false" tabindex="-1">DRI</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab2" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-contact2" type="button" role="tab"
                                aria-controls="contact" aria-selected="false" tabindex="-1">DEF</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab3" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-contact3" type="button" role="tab"
                                aria-controls="contact" aria-selected="false" tabindex="-1">PHY</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab4" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-contact4" type="button" role="tab"
                                aria-controls="contact" aria-selected="false" tabindex="-1">OVR</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div class="tab-pane fade" id="bordered-justified-home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <p><b>Serangan (Attack)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Finishing (Penyelesaian): Kemampuan pemain dalam mencetak gol dengan akurasi
                                        tinggi saat menyelesaikan peluang.</p>
                                </li>
                                <li>
                                    <p>Shot Power (Kekuatan Tendangan): Kemampuan pemain dalam memberikan kekuatan
                                        pada tendangan.
                                        Positioning (Posisi): Kemampuan pemain dalam menempatkan dirinya dengan baik
                                        di lapangan untuk menciptakan peluang gol.</p>
                                </li>
                                <li>
                                    <p>Acceleration (Akselerasi): Kemampuan pemain dalam meningkatkan kecepatan
                                        secara cepat.</p>
                                </li>
                                <li>
                                    <p>Sprint Speed (Kecepatan Lari): Kecepatan maksimal pemain saat berlari dalam
                                        jarak pendek.</p>
                                </li>
                            </ul>
                            </p>

                        </div>
                        <div class="tab-pane fade active show" id="bordered-justified-profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <p><b>Kemampuan (Skill)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Dribbling (Menggiring Bola): Kemampuan pemain dalam menguasai bola dan
                                        melakukan gerakan-gerakan dribbling.</p>
                                </li>
                                <li>
                                    <p>Ball Control (Kontrol Bola): Kemampuan pemain dalam mengendalikan bola saat
                                        menerima dan mempertahankannya.</p>
                                </li>
                                <li>
                                    <p>Free Kick Accuracy (Akurasi Tendangan Bebas): Kemampuan pemain dalam
                                        memberikan tendangan bebas dengan akurasi tinggi.</p>
                                </li>
                                <li>
                                    <p>Passing (Umpan): Kemampuan pemain dalam memberikan umpan yang akurat dan
                                        tepat waktu.</p>
                                </li>
                                <li>
                                    <p>Crossing (Umpan Silang): Kemampuan pemain dalam memberikan umpan silang
                                        dengan akurasi dan kecepatan yang baik.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-contact1" role="tabpanel"
                            aria-labelledby="contact-tab1">
                            <p><b>Pergerakan (Move)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Agility (Kelincahan): Kemampuan pemain dalam melakukan gerakan-gerakan yang
                                        lincah dan cepat.</p>
                                </li>
                                <li>
                                    <p>Balance (Keseimbangan): Kemampuan pemain dalam menjaga keseimbangan tubuh
                                        saat melakukan gerakan atau menghadapi tekanan dari lawan.</p>
                                </li>
                                <li>
                                    <p>Reactions (Reaksi): Kemampuan pemain dalam merespons dengan cepat terhadap
                                        situasi permainan yang berubah.</p>
                                </li>
                                <li>
                                    <p>Ball Control (Kontrol Bola): Kemampuan pemain dalam mengendalikan bola saat
                                        menerima dan mempertahankannya.</p>
                                </li>
                                <li>
                                    <p>Composure (Ketenangan): Kemampuan pemain dalam menjaga ketenangan dan
                                        konsentrasi saat menghadapi tekanan.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <p><b>Kekuatan (Power)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Strength (Kekuatan Fisik): Kemampuan pemain dalam menghadapi tekanan fisik
                                        dari lawan.</p>
                                </li>
                                <li>
                                    <p>Shot Power (Kekuatan Tendangan): Kemampuan pemain dalam memberikan kekuatan
                                        pada tendangan.</p>
                                </li>
                                <li>
                                    <p>Jumping (Lompatan): Kemampuan pemain dalam melompat tinggi untuk memenangkan
                                        duel udara.</p>
                                </li>
                                <li>
                                    <p>Stamina (Ketahanan): Kemampuan pemain dalam menjaga performa fisiknya selama
                                        pertandingan.</p>
                                </li>
                                <li>
                                    <p>Aggression (Agresivitas): Tingkat keberanian dan agresivitas pemain dalam
                                        merebut bola dan menghadapi lawan.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-contact2" role="tabpanel"
                            aria-labelledby="contact-tab2">
                            <p><b>Kekuatan (adada)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Strength (Kekuatan Fisik): Kemampuan pemain dalam menghadapi tekanan fisik
                                        dari lawan.</p>
                                </li>
                                <li>
                                    <p>Shot Power (Kekuatan Tendangan): Kemampuan pemain dalam memberikan kekuatan
                                        pada tendangan.</p>
                                </li>
                                <li>
                                    <p>Jumping (Lompatan): Kemampuan pemain dalam melompat tinggi untuk memenangkan
                                        duel udara.</p>
                                </li>
                                <li>
                                    <p>Stamina (Ketahanan): Kemampuan pemain dalam menjaga performa fisiknya selama
                                        pertandingan.</p>
                                </li>
                                <li>
                                    <p>Aggression (Agresivitas): Tingkat keberanian dan agresivitas pemain dalam
                                        merebut bola dan menghadapi lawan.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-contact3" role="tabpanel"
                            aria-labelledby="contact-tab3">
                            <p><b>Kekuatan (3)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Strength (Kekuatan Fisik): Kemampuan pemain dalam menghadapi tekanan fisik
                                        dari lawan.</p>
                                </li>
                                <li>
                                    <p>Shot Power (Kekuatan Tendangan): Kemampuan pemain dalam memberikan kekuatan
                                        pada tendangan.</p>
                                </li>
                                <li>
                                    <p>Jumping (Lompatan): Kemampuan pemain dalam melompat tinggi untuk memenangkan
                                        duel udara.</p>
                                </li>
                                <li>
                                    <p>Stamina (Ketahanan): Kemampuan pemain dalam menjaga performa fisiknya selama
                                        pertandingan.</p>
                                </li>
                                <li>
                                    <p>Aggression (Agresivitas): Tingkat keberanian dan agresivitas pemain dalam
                                        merebut bola dan menghadapi lawan.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-contact4" role="tabpanel"
                            aria-labelledby="contact-tab4">
                            <p><b>Kekuatan (34)</b> merupakan kemampuan dari pemain yang meliputi:
                            <ul>
                                <li>
                                    <p>Strength (Kekuatan Fisik): Kemampuan pemain dalam menghadapi tekanan fisik
                                        dari lawan.</p>
                                </li>
                                <li>
                                    <p>Shot Power (Kekuatan Tendangan): Kemampuan pemain dalam memberikan kekuatan
                                        pada tendangan.</p>
                                </li>
                                <li>
                                    <p>Jumping (Lompatan): Kemampuan pemain dalam melompat tinggi untuk memenangkan
                                        duel udara.</p>
                                </li>
                                <li>
                                    <p>Stamina (Ketahanan): Kemampuan pemain dalam menjaga performa fisiknya selama
                                        pertandingan.</p>
                                </li>
                                <li>
                                    <p>Aggression (Agresivitas): Tingkat keberanian dan agresivitas pemain dalam
                                        merebut bola dan menghadapi lawan.</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div><!-- End Bordered Tabs Justified -->

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
