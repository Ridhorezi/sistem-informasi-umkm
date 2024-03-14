@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="header-data">
                <div class="card p-1 shadow card-data">
                    <div class="d-flex align-items-center px-4">
                        <div class="card-body text-end">
                            <h2 class="text-center fw-bold">Tambah Data UMKM</h2>
                        </div>
                    </div>
                </div>
            </div>

            <form class="row g-3" method="post" action="/tambah-data-umkm">
                @csrf

                {{-- Data Diri --}}
                <h3>Data Pemilik</h3>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik"
                            placeholder="Input nama pemilik di sini ..." required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki - Laki</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7 mb-5">
                    <div class="form-group">
                        <label class="form-label">Alamat Pemilik</label>
                        <textarea type="text" class="form-control" placeholder="Input alamat detail di sini ..." name="alamat_pemilik"
                            rows="6" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kota Pemilik</label>
                        <input type="text" class="form-control" name="kota_pemilik"
                            placeholder="Input kota pemilik di sini ..." required />
                    </div>
                </div>

                {{-- Data Usaha --}}
                <h3>Data Usaha</h3>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="Input nama usaha di sini ..."
                            name="nama_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_usaha_id" class="form-label">Jenis Usaha</label>
                        <select id="jenis_usaha_id" class="form-select" name="jenis_usaha_id" required>
                            <option value="" disabled selected>Pilih Jenis Usaha</option>
                            @foreach ($jenis_usahas as $jenis_usaha)
                                <option value="{{ $jenis_usaha->id }}">{{ $jenis_usaha->jenis_usaha }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Lama Berdirinya Usaha</label>
                        <input type="text" class="form-control"
                            placeholder="Input lama berdirinya usaha di sini, cth : 1 bulan / tahun"
                            name="lama_berdirinya_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nilai Pendanaan</label>
                        <input type="number" class="form-control" placeholder="1000000" name="nilai_pendanaan" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sumber Pendanaan</label>
                        <input type="text" class="form-control" placeholder="Input sumber pendanaan di sini"
                            name="sumber_pendanaan" required />
                    </div>
                </div>
                <div class="col-md-7 mb-5">
                    <div class="form-group">
                        <label class="form-label">Hambatan Usaha</label>
                        <textarea type="text" class="form-control" placeholder="Input hambatan usaha di sini" name="hambatan_usaha"
                            rows="6" required></textarea>
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
