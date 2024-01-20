@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">

        @include('parts.admin.search-admin')

        <div class="container-fluid">
            {{-- <div class="row g-3 mb-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-4">
                            <i class="fa fa-id-card-o fa-3x py-auto" aria-hidden="true" style="color:#809EE0"></i>
                            <div class="card-body text-end">
                                <h2 class="card-title" style="color:#ff7517">{{ $count }}</h2>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Jumlah Data UMKM Kota Semarang</small>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="charts">
                <div class="row g-3 mb-4">
                    <div class="col-9">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartOne"></canvas>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="card-header bg-white">
                                <small class="text-start fw-bold">Jumlah Pendaftar Rumah Berdaya Bekasi</small>
                            </div>
                            <div class="d-flex align-items-center px-4">
                                <i class="fa fa-id-card-o fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h2 class="card-title" style="color:#ff7517">{{ $count }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
