@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="header-data">
                <div class="card p-1 shadow card-data">
                    <div class="d-flex align-items-center px-4">
                        <div class="card-body text-end">
                            <h2 class="text-center fw-bold">Tambah Data User</h2>
                        </div>
                    </div>
                </div>
            </div>

            <form class="row g-3" method="post" action="/tambah-data-user">
                @csrf

                {{-- Data User --}}
                <h3>Data User</h3>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Input nama user di sini ..."
                            required />
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Input email di sini ..."
                            required />
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Input password di sini ..."
                            required />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role_id" class="form-label">Role</label>
                        <select id="role_id" class="form-select" name="role_id" required>
                            <option value="" disabled selected>Pilih Role User</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5 col-md-3">
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
