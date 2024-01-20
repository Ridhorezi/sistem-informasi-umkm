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

            {{-- @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> {{ $errors->all()[0] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}

            <form class="row g-3" method="post" action="/tambah-data-umkm">
                @csrf
                {{-- Data Diri --}}
                <h3>Data Diri</h3>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_pemilik" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sosial Media</label>
                        <input type="text" class="form-control" name="sosial_media" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">No Hp</label>
                        <input type="text" class="form-control" name="no_telepon" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan_pemilik" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan_pemilik" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                        <select id="pendidikan" class="form-select" name="pendidikan_terakhir" required>
                            <option value=""> - </option>
                            <option value="S1">S1</option>
                            <option value="D3">D3</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7 mb-5">
                    <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat_pemilik" rows="6" required></textarea>
                    </div>
                </div>

                {{-- Data Usaha --}}
                <h3>Data Usaha</h3>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="nama_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="bidang_usaha" required />
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Produk</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_usaha" required />
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <label class="form-label">Jenis Usaha:</label>
                    <select class="form-select" name="jenis_usaha" required>
                        <option value="">- Pilih Jenis Usaha -</option>
                        <option value="Warung Makan/Restoran Kecil">Warung Makan/Restoran Kecil</option>
                        <option value="Toko Kelontong">Toko Kelontong</option>
                        <option value="Ukiran Kayu/Pertukangan Kecil">Ukiran Kayu/Pertukangan Kecil</option>
                        <option value="Tani/Peternakan">Tani/Peternakan</option>
                        <option value="Pengolahan Makanan dan Minuman">Pengolahan Makanan dan Minuman</option>
                        <option value="Jasa Fotografi">Jasa Fotografi</option>
                        <option value="Produksi Kerajinan Tangan">Produksi Kerajinan Tangan</option>
                        <option value="Bisnis Fashion">Bisnis Fashion</option>
                        <option value="Pusat Layanan Komputer/IT">Pusat Layanan Komputer/IT</option>
                        <option value="Klinik Kecantikan">Klinik Kecantikan</option>
                        <option value="Tour and Travel Lokal">Tour and Travel Lokal</option>
                        <option value="Produksi Produk Ramah Lingkungan">Produksi Produk Ramah Lingkungan</option>
                        <option value="Jasa Konsultasi Bisnis">Jasa Konsultasi Bisnis</option>
                        <option value="Pengembangan Aplikasi/IT">Pengembangan Aplikasi/IT</option>
                        <option value="Pembuatan Keripik Buah">Pembuatan Keripik Buah</option>
                        <option value="Pusat Oleh-oleh">Pusat Oleh-oleh</option>
                        <option value="Jasa Desain Grafis">Jasa Desain Grafis</option>
                        <option value="Penyewaan Alat Pesta">Penyewaan Alat Pesta</option>
                        <option value="Bengkel Motor">Bengkel Motor</option>
                        <option value="Produksi Batik">Produksi Batik</option>
                        <option value="Jasa Penukaran Uang Asing">Jasa Penukaran Uang Asing</option>
                        <option value="Galeri Seni Lokal">Galeri Seni Lokal</option>
                        <option value="Bisnis Katering">Bisnis Katering</option>
                        <option value="Produksi Produk Herbal">Produksi Produk Herbal</option>
                        <option value="Jasa Desain Interior">Jasa Desain Interior</option>
                        <option value="Penyewaan Kostum">Penyewaan Kostum</option>
                        <option value="Jasa Pemotretan Produk">Jasa Pemotretan Produk</option>
                        <option value="Klinik Hewan Peliharaan">Klinik Hewan Peliharaan</option>
                        <option value="Pusat Penyewaan Mobil">Pusat Penyewaan Mobil</option>
                        <option value="Bisnis Percetakan">Bisnis Percetakan</option>
                        <option value="Jasa Konsultasi Keuangan">Jasa Konsultasi Keuangan</option>
                        <option value="Penyewaan Alat Berat">Penyewaan Alat Berat</option>
                        <option value="Bisnis Online Shop">Bisnis Online Shop</option>
                        <option value="Produksi Film Indie">Produksi Film Indie</option>
                        <option value="Jasa Desain Web">Jasa Desain Web</option>
                        <option value="Pembuatan Aksesoris Handmade">Pembuatan Aksesoris Handmade</option>
                        <option value="Bengkel Elektronik">Bengkel Elektronik</option>
                        <option value="Konsultan HRD">Konsultan HRD</option>
                        <option value="Pengolahan Limbah Plastik">Pengolahan Limbah Plastik</option>
                        <option value="Bisnis Layanan Kesehatan">Bisnis Layanan Kesehatan</option>
                        <option value="Jasa Pijat">Jasa Pijat</option>
                        <option value="Catering Makanan Sehat">Catering Makanan Sehat</option>
                        <option value="Desain Interior Rumah Sakit">Desain Interior Rumah Sakit</option>
                        <option value="Bisnis Pembuatan Tas">Bisnis Pembuatan Tas</option>
                        <option value="Jasa Event Organizer">Jasa Event Organizer</option>
                        <option value="Pembuatan Kue Kering">Pembuatan Kue Kering</option>
                        <option value="Bisnis Jualan Bunga">Bisnis Jualan Bunga</option>
                        <option value="Penyewaan Studio Musik">Penyewaan Studio Musik</option>
                        <option value="Bisnis Fotokopi">Bisnis Fotokopi</option>
                        <option value="Jasa Pemasangan CCTV">Jasa Pemasangan CCTV</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Izin Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="izin_usaha" required />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">Alamat Tempat Usaha</label>
                        <textarea type="text" class="form-control" rows="6" name="alamat_usaha" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kelurahan_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kecamatan_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">NIB/OSS</label>
                        <input type="text" class="form-control" placeholder="" name="nib" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">No. Pendataan UMKM</label>
                        <input type="text" class="form-control" placeholder="" name="no_pendataan_umkm" required />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Permodalan Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="permodalan_usaha" required />
                    </div>
                </div>
                <div id="aset">
                    <div class="row-aset" style="display: inline-flex" id="row-0">
                        <div class="col-md-4 me-2">
                            <div class="form-group">
                                <label class="form-label">Aset</label>
                                <input type="text" name="aset[]" class="form-control" placeholder="" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">T. Aset</label>
                                <input type="number" name="tahun_aset[]" class="form-control" placeholder="Tahun Aset"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-1 pad-40">
                            <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldAset()"></i>
                        </div>
                    </div>
                </div>
                <div id="omset">
                    <div class="row-omset" style="display: inline-flex" id="row-0">
                        <div class="col-md-4 me-2">
                            <div class="form-group">
                                <label class="form-label">Omset</label>
                                <input type="text" name="omset[]" class="form-control" placeholder="" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">T. Omset</label>
                                <input type="number" name="tahun_omset[]" class="form-control"
                                    placeholder="Tahun Omset" required />
                            </div>
                        </div>
                        <div class="col-md-1 pad-40">
                            <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldOmset()"></i>
                        </div>
                    </div>
                </div>
                <div id="kapasitas-produksi">
                    <div class="row-kapasitas-produksi" style="display: inline-flex" id="row-0">
                        <div class="col-md-4 me-2 col-4">
                            <div class="form-group">
                                <label class="form-label">Kapasitas Produksi</label>
                                <input type="text" name="kapasitas_produksi[]" class="form-control" placeholder=""
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4 col-5">
                            <div class="form-group">
                                <label class="form-label">T. Kapasitas Produksi</label>
                                <input type="number" name="tahun_kapasitas_produksi[]" class="form-control"
                                    placeholder="Tahun Kapasitas Produksi" required />
                            </div>
                        </div>
                        <div class="col-md-1 pad-40">
                            <i class="fa fa-plus fa-lg box-icon" href="#"
                                onclick="tambahFieldKapasitasProduksi()"></i>
                        </div>
                    </div>
                </div>
                <div id="tenaga-kerja">
                    <div class="row-tenaga-kerja" style="display: inline-flex" id="row-0">
                        <div class="col-md-4 col-4 me-2">
                            <div class="form-group">
                                <label class="form-label">Tenaga Kerja</label>
                                <input type="text" name="tenaga_kerja[]" class="form-control" placeholder=""
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4 col-5">
                            <div class="form-group">
                                <label class="form-label">T. Tenaga Kerja</label>
                                <input type="number" name="tahun_tenaga_kerja[]" class="form-control"
                                    placeholder="Tahun Tenaga Kerja" required />
                            </div>
                        </div>
                        <div class="col-md-1 pad-40">
                            <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldTenagaKerja()"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Cakupan Wilayah Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="cakupan_wilayah_pemasaran"
                            required />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_pemasaran" required />
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label class="form-label">Permasalahan yang Dihadapi</label>
                        <textarea type="text" class="form-control" rows="6" name="permasalahan_usaha" required></textarea>
                    </div>
                </div>

                {{-- Data Pelatihan --}}
                <h3>Data Pelatihan</h3>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Pelatihan yang Pernah Diikuti</label>
                        <textarea type="text" class="form-control" rows="6" name="pengalaman_pelatihan" required></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Usulan Pelatihan</label>
                        <textarea type="text" class="form-control" name="usulan_pelatihan" rows="6" required></textarea>
                    </div>
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
