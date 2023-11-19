@extends('admin/index')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-2">Pengiriman Diterima <span class="badge text-bg-success">{{date('d-m-Y')}}</span></h5>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>PASAR PRAMUKA LT DASAR AKS 159 PS.PRAMUKA</td>
                                        <td>TRIR002</td>
                                        <td>167</td>
                                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Konfirmasi</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>JL. SULTAN AGUNG NO. 67 SETIA BUDI PASAR MANGGIS</td>
                                        <td>FONK009</td>
                                        <td>2</td>
                                        <td><a href="#">Konfirmasi</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>JL. PADEMANGAN IV NO. 257 A PADEMANGAN PADEMANGAN TIMUR</td>
                                        <td>CLAV002</td>
                                        <td>6</td>
                                        <td><a href="#">Konfirmasi</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah pengiriman telah selesai?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="/admin" class="btn btn-primary">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection