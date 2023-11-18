@extends('admin/index')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-2">Tambah Tugas Pengiriman</h5>
                <form action="{{url('')}}">
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-2">
                            <label for="moda">Moda Transportasi</label>
                            <select class="form-select">
                                <option selected hidden>Moda Transportasi</option>
                                <optgroup label="Transport Internal">
                                    <option value="GrandMax">GrandMax</option>
                                    <option value="Motor">Motor</option>
                                </optgroup>

                                <optgroup label="Transport External">

                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-contentstart justify-content-lg-end align-items-end">
                        <div class="col-auto mt-2 mt-lg-0">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</main>

@endsection