@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="header-data">
                <div class="card p-1 shadow card-data">
                    <div class="d-flex align-items-center px-4">
                        <div class="card-body text-end">
                            <h2 class="text-center fw-bold">Edit Data User</h2>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Peringatan!</strong> {{ $errors->all()[0] }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form class="row g-3" method="post" action="{{ route('editUser', ['id' => $datas[0]->id]) }}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Input nama user di sini ..." name="name"
                            required value="{{ $datas[0]->name }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Input email di sini ..." name="email"
                            required value="{{ $datas[0]->email }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="Input password di sini ..." name="password"
                            required value="" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role_id" class="form-label">Role</label>
                        <select id="role_id" class="form-select" name="role_id" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ $datas[0]->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="row">
                        <div class="col-6 col-sm-5 col-md-3">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Edit Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
