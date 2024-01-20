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
                        <input type="text" class="form-control" placeholder="" name="nama_usaha" required
                            value="{{ $data[0]->nama_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="bidang_usaha" required
                            value="{{ $data[0]->bidang_usaha }}" />
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_usaha" required
                            value="{{ $data[0]->jenis_usaha }}" />
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Usaha</label>
                        <select class="form-select" name="jenis_usaha">
                            <option value="{{ $data[0]->jenis_usaha }}">{{ $data[0]->jenis_usaha }}</option>
                            <option value="Warung Makan/Restoran Kecil">Warung Makan/Restoran Kecil</option>
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
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Izin Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="izin_usaha" required
                            value="{{ $data[0]->izin_usaha }}" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">Alamat Tempat Usaha</label>
                        <textarea type="text" class="form-control" rows="6" name="alamat_usaha" required>{{ $data[0]->alamat_usaha }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kelurahan_usaha" required
                            value="{{ $data[0]->kelurahan_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kecamatan_usaha" required
                            value="{{ $data[0]->kecamatan_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">NIB/OSS</label>
                        <input type="text" class="form-control" placeholder="" name="nib" required
                            value="{{ $data[0]->nib_oss }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">No. Pendataan UMKM</label>
                        <input type="text" class="form-control" placeholder="" name="no_pendataan_umkm" required
                            value="{{ $data[0]->no_pendataan_umkm }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Permodalan Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="permodalan_usaha" required
                            value="{{ $data[0]->permodalan_usaha }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Cakupan Wilayah Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="cakupan_wilayah_pemasaran"
                            required value="{{ $data[0]->cakupan_wilayah_pemasaran }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_pemasaran" required
                            value="{{ $data[0]->jenis_pemasaran }}" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">Permasalahan yang Dihadapi</label>
                        <textarea type="text" class="form-control" rows="6" name="permasalahan_usaha" required>{{ $data[0]->permasalahan_usaha }}</textarea>
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
