@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="header-data">
                <div class="card p-1 shadow card-data">
                    <div class="d-flex align-items-center px-4">
                        <div class="card-body text-end">
                            <h2 class="text-center fw-bold">Edit Data Usaha</h2>
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
            <form class="row g-3" method="post" action="{{ route('editUsaha', ['id' => $data[0]->id]) }}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="Input nama usaha di sini ..."
                            name="nama_usaha" required value="{{ $data[0]->nama_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
                        <select id="jenis_usaha" class="form-select" name="jenis_usaha_id" required>
                            @foreach ($jenis_usaha as $jenis)
                                <option value="{{ $jenis->id }}"
                                    {{ $data[0]->jenis_usaha_id == $jenis->id ? 'selected' : '' }}>
                                    {{ $jenis->jenis_usaha }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Lama Berdirinya Usaha</label>
                        <input type="text" class="form-control"
                            placeholder="Input lama berdirinya usaha di sini, cth : 1 bulan / tahun"
                            name="lama_berdirinya_usaha" required value="{{ $data[0]->lama_berdirinya_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nilai Pendanaan</label>
                        <input type="number" class="form-control" placeholder="1000000" name="nilai_pendanaan" required
                            value="{{ $data[0]->nilai_pendanaan }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sumber Pendanaan</label>
                        <input type="text" class="form-control" placeholder="Input sumber pendanaan di sini ..."
                            name="sumber_pendanaan" required value="{{ $data[0]->sumber_pendanaan }}" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">Hambatan Usaha</label>
                        <textarea type="text" class="form-control" placeholder="Input hambatan usaha di sini ..." rows="6"
                            name="hambatan_usaha" required>{{ $data[0]->hambatan_usaha }}</textarea>
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
