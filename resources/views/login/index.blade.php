@extends('layouts.main-login')

@section('container')
    <p class="fw-bold text-center mt-5" style="font-size: 100%;">Selamat datang kembali admin, <br> silahkan login untuk
        mengakses
        admin dashboard!</p>

    <p class="fw-bold text-center mt-3" style="font-size: 20px;">Login | Admin</p>


    @isset($login_error)
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill" style="font-size: 13px"></i>
                    <div style="margin-left: 10px; font-size: 13px">
                        Email/Password yang anda masukkan salah!
                    </div>
                    <button style="font-size: 10px" type="button" class="btn-close shadow-none" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endisset

    <div class="card m-auto mb-3 rounded-4 border-0" style="width: 50%; height: 50%; background: #EBF0F6">
        <div class="card-body">

            <form class="row p-4" action="/login" method="post">
                @csrf
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm rounded-3" id="email" placeholder=""
                        name="email" required>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm rounded-3" id="password" placeholder=""
                        name="password" required>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-primary btn-sm" type="submit" style="width: 100%">Masuk</button>
                </div>
            </form>
        </div>
    </div>
@endsection
