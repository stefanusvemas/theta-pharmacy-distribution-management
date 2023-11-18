@extends('admin/index')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title mb-3">
                    <h3>Hi, Petugas Gudang 👋</h3>
                </div>
                <div class="row justify-content-center justify-content-md-start align-items-center mb-3">
                    <!-- Card Request -->
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <div class="col">
                                        10
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Request
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            1
                                            <span class="visually-hidden">Life Saving Order</span>
                                        </span>
                                    </div>
                                </div>
                                <a href="{{url('admin/request')}}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                    <!-- On Going -->
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-solid fa-truck-fast"></i>
                                    </div>
                                    <div class="col text-center">
                                        10
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        On Going
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('admin/on_going')}}" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- Done -->
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col">
                                        10
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        Done
                                    </div>
                                </div>
                                <a href="{{url('admin/done')}}" class="stretched-link"></a>
                            </div>
                        </div>


                    </div>
                </div>

                <h5>Laporan Logistik <span class="badge text-bg-success">{{date('d-m-Y')}}</span></h5>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Cabang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>PASAR PRAMUKA LT DASAR AKS 159 PS.PRAMUKA <span class="badge text-bg-danger">Life Saving</span></td>
                                        <td>Request</td>
                                        <td>Jakarta 2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>JL. SULTAN AGUNG NO. 67 SETIA BUDI PASAR MANGGIS</td>
                                        <td>On Going</td>
                                        <td>Jakarta 2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>JL. PADEMANGAN IV NO. 257 A PADEMANGAN PADEMANGAN TIMUR</td>
                                        <td>Done</td>
                                        <td>Jakarta 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

@endsection