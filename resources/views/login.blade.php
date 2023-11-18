@extends('index')
@section('content')

<main class="container">
    <div class="row justify-content-center mt-4">
        <img src="{{'images/login.png'}}" alt="" style="width: 260px; transform: translate(20px);">
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-10 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3>LOGIN</h3>
                    </div>
                    <form action="{{url('admin')}}">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control mb-2 py-2" placeholder="Masukkan email" required />

                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control mb-2 py-2" placeholder="Masukkan password" required />

                        <button type="submit" class="btn w-100" style="background-color: #22668D; color: #fff">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection