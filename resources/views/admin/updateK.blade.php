@extends('layout.adminlay')

@section('konten')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Nilai K</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update Nilai K</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar nilai K pada perhitungan</h5>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis</th>
                                <th class="text-center" scope="col">Nilai K</th>
                                <th scope="col">Ubah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilaiK as $k)
                                <tr>
                                    <th scope="row">{{ $k->id }}</th>
                                    <td class="text-capitalize">{{ $k->jenis }}</td>
                                    <td class="text-center">{{ $k->nilai_k }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $k->id }}">
                                            <i class="ri-edit-2-line"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $k->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah nilai K
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/edit/{{ $k->id }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1"
                                                                    class="form-label">Jenis</label>
                                                                <input type="text" class="form-control text-capitalize"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    value="{{ $k->jenis }}" disabled>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">Password</label>
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputPassword1" name="nilai_k" value="{{ $k->nilai_k }}">
                                                                <div id="emailHelp" class="form-text">Masukkan nilai 3 - 17.
                                                                    Pastikan bernilai <b>ganjil</b></div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
