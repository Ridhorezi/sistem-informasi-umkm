@extends('layouts.main-umkm')

@section('container')
    <!-- Form Container -->
    <div class="container my-5">

        <form class="card" method="post" action="{{ route('tambahUmkmUser') }}">
            @csrf
            <!-- Form Data Diri -->
            <section>
                @if (Session::get('gagal'))
                    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                        <strong>Peringatan!</strong> {{ Session::get('gagal') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (Session::get('sukses'))
                    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                        <strong>Registrasi Data UMKM Berhasil</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="section-title mt-5">Data Diri Pemilik Usaha</div>

                <div class="line-title"></div>

                <div class="card-body">
                    <div class="row gx-xl-5">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Nama Pemilik:</label>
                            <input type="text" class="form-control" placeholder="Input nama pemilik di sini ..."
                                name="nama_pemilik" required />
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" class="form-select" name="jenis_kelamin" required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki - Laki</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-xl-5">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Alamat Pemilik:</label>
                            <textarea type="text" class="form-control" rows="6" placeholder="Input alamat detail di sini ..."
                                name="alamat_pemilik" required></textarea>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Kota Pemilik:</label>
                            <input type="text" class="form-control" placeholder="Input kota pemilik di sini ..."
                                name="kota_pemilik" required />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Form Data Diri -->

            <div class="line"></div>

            <!-- Form Data Usaha -->
            <section>
                <div class="section-title">Data Usaha</div>
                <div class="line-title"></div>
                <div class="card-body">
                    <div class="row gx-xl-5">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Nama Usaha:</label>
                            <input type="text" class="form-control" placeholder="Input nama usaha di sini ..."
                                name="nama_usaha" required />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="jenis_usaha_id" class="form-label">Jenis Usaha:</label>
                            <select id="jenis_usaha_id" class="form-select" name="jenis_usaha_id" required>
                                <option value="" disabled selected>Pilih Jenis Usaha</option>
                                @foreach ($jenis_usahas as $jenis_usaha)
                                    <option value="{{ $jenis_usaha->id }}">{{ $jenis_usaha->jenis_usaha }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row gx-xl-5">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Lama Berdirinya Usaha:</label>
                            <input type="text" class="form-control"
                                placeholder="Input lama berdirinya usaha di sini, cth : 1 bulan / tahun"
                                name="lama_berdirinya_usaha" required />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Nilai Pendanaan:</label>
                            <input type="number" class="form-control" placeholder="1000000" name="nilai_pendanaan"
                                required />
                        </div>
                    </div>
                    <div class="row gx-xl-5">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Sumber Pendanaan:</label>
                            <input type="text" class="form-control" placeholder="Input sumber pendanaan di sini"
                                name="sumber_pendanaan" required />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Hambatan Usaha:</label>
                            <textarea type="text" class="form-control" rows="6" placeholder="Input hambatan usaha di sini"
                                name="hambatan_usaha" required></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Form Data Usaha -->

            <div class="line"></div>

            <!-- Button Submit Reset -->
            <div class="d-flex justify-content-between gap-4 py-4 px-5 mb-3">
                <button type="reset" class="black-btn red-btn w-100">Reset</button>
                <button id="tambah-data-umkm" type="submit" class="btn blue-btn w-100">Submit</button>
            </div> <!-- End Button Submit Reset -->

        </form>
    </div> <!-- End Form Container -->
@endsection
