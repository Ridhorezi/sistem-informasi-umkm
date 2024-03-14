@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="header-data">
                <div class="card p-1 shadow card-data">
                    <div class="d-flex align-items-center px-4">
                        <div class="card-body text-end">
                            <h2 class="text-center">Edit Data Pemilik</h2>
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

            <form class="row g-3" method="post" action="{{ route('editPemilik', ['id' => $data[0]->id]) }}">
                @csrf
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik"
                            placeholder="Input nama pemilik di sini ..." required value="{{ $data[0]->nama_pemilik }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="$jenis_kelamin" class="form-select" name="jenis_kelamin" required>
                            @foreach ($genders as $jenis_kelamin)
                                <option value="{{ $jenis_kelamin }}"
                                    {{ $jenis_kelamin == $data[0]->jenis_kelamin ? 'selected' : '' }}>{{ $jenis_kelamin }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-8 mb-5">
                    <div class="form-group">
                        <label class="form-label">Alamat Pemilik</label>
                        <textarea type="text" class="form-control" placeholder="Input alamat pemilik di sini ..." name="alamat_pemilik"
                            rows="6" required>{{ $data[0]->alamat_pemilik }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota Pemilik</label>
                        <input type="kota_pemilik" class="form-control" name="kota_pemilik"
                            placeholder="Input kota pemilik di sini ..." required value="{{ $data[0]->kota_pemilik }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5 col-md-3 mt-3">
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Edit Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
