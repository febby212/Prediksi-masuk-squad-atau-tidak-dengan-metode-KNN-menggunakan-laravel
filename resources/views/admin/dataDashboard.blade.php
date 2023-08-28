<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Penyerang <span>| Data</span></h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-pie-chart-line"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $att }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Gelandang <span>| Data</span></h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-pie-chart-line"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $mid }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Bertahan <span>| Data</span></h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-pie-chart-line"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $def }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">GK <span>| Data</span></h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-pie-chart-line"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $kiper }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Data Pemain Penyerang <span>| Terbaru</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pace</th>
                                        <th scope="col">Shooting</th>
                                        <th scope="col">Passing</th>
                                        <th scope="col">Dribbling</th>
                                        <th scope="col">Defending</th>
                                        <th scope="col">Physical</th>
                                        <th scope="col">Overall</th>
                                        <th scope="col">Masuk Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penyerang as $p)
                                        <tr>
                                            <th scope="row">{{ $p->nama }}</th>
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
                            <h5 class="card-title">Data Pemain Gelandang <span>| Terbaru</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pace</th>
                                        <th scope="col">Shooting</th>
                                        <th scope="col">Passing</th>
                                        <th scope="col">Dribbling</th>
                                        <th scope="col">Defending</th>
                                        <th scope="col">Physical</th>
                                        <th scope="col">Overall</th>
                                        <th scope="col">Masuk Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gelandang as $g)
                                        <tr>
                                            <th scope="row">{{ $g->nama }}</th>
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
                            <h5 class="card-title">Data Pemain Bertahan <span>| Terbaru</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pace</th>
                                        <th scope="col">Shooting</th>
                                        <th scope="col">Passing</th>
                                        <th scope="col">Dribbling</th>
                                        <th scope="col">Defending</th>
                                        <th scope="col">Physical</th>
                                        <th scope="col">Overall</th>
                                        <th scope="col">Masuk Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bertahan as $b)
                                        <tr>
                                            <th scope="row">{{ $b->nama }}</th>
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
                            <h5 class="card-title">Data Pemain Penjaga Gawang <span>| Terbaru</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Diving</th>
                                        <th scope="col">Handling</th>
                                        <th scope="col">Kicking</th>
                                        <th scope="col">Reflexes</th>
                                        <th scope="col">Speed</th>
                                        <th scope="col">Positioning</th>
                                        <th scope="col">Overall</th>
                                        <th scope="col">Masuk Squad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gk as $gk)
                                        <tr>
                                            <th scope="row">{{ $gk->nama }}</th>
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

            </div>
        </div><!-- End Left side columns -->
    </div>
</section>
