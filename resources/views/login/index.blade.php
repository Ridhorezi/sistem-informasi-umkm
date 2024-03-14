@extends('layouts.main-login')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5 p-3 border-0">
                    <div class="card-header bg-transparent text-center">
                        <h5 class="fw-bold">Login | Admin</h5>
                        <p>Silahkan login untuk mengakses admin dashboard.</p>
                    </div>
                    <div class="card-body">
                        @isset($login_error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                <span>Email/Password yang Anda masukkan salah!</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endisset

                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm" type="submit" style="width: 100%">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
