@extends('admin/index')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-2">Dalam Perjalanan <span class="badge text-bg-success">{{date('d-m-Y')}}</span></h5>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>PASAR PRAMUKA LT DASAR AKS 159 PS.PRAMUKA</td>
                                        <td>TRIR002</td>
                                        <td>CHARTER/GRANDMAX</td>
                                        <td><a href="{{url('admin/maps/realtime')}}">Lokasi</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>JL. SULTAN AGUNG NO. 67 SETIA BUDI PASAR MANGGIS</td>
                                        <td>FONK009</td>
                                        <td>CHARTER/MOTOR</td>
                                        <td><a href="{{url('admin/maps/realtime')}}">Lokasi</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>JL. PADEMANGAN IV NO. 257 A PADEMANGAN PADEMANGAN TIMUR</td>
                                        <td>CLAV002</td>
                                        <td>CHARTER/MOTOR</td>
                                        <td><a href="{{url('admin/maps/realtime')}}">Lokasi</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</main>

@endsection