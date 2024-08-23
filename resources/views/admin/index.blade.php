@extends('layouts.main-admin')

@section('wrapper')
    <div class="main-pages">

        @include('parts.admin.search-admin')

        <div class="container-fluid">
            <div class="header-body mb-3">
                <div class="row">
                    <div class="col-md-2 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2">Seluruh Pendaftar RBC</p>
                                        <span class="h3 font-weight-bold mb-0">{{ $count }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2">Jenis Kelamin Laki - Laki</p>
                                        <span class="h3 font-weight-bold mb-0">{{ $dataAnalytic['jk_pria'] }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-male"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2">
                                            Jenis Kelamin Perempuan
                                        </p>
                                        <span class="h3 font-weight-bold mb-0">{{ $dataAnalytic['jk_wanita'] }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fa fa-female"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2"> Sumber Pendanaan Pribadi</p>
                                        <span class="h3 font-weight-bold mb-0">{{ $dataAnalytic['dana_pribadi'] }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-money"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2"> Sumber Pendanaan Bank</p>
                                        <span class="h3 font-weight-bold mb-0">{{ $dataAnalytic['dana_bank'] }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-bank"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 p-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-uppercase text-muted mb-2">Jenis Usaha Tertinggi
                                        </p>
                                        <span class="h3 font-weight-bold mb-0">{{ $dataAnalytic['usaha_tertinggi'] }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="exportPdfButton" class="btn btn-primary m-2">Export Chart</button>
            <!-- Charts -->
            <div class="charts">
                <div class="chart-container">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="myChartOne"></canvas>
                    </div>
                </div>
                {{-- <div class="chart-container">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="combinedData"></canvas>
                    </div>
                </div> --}}
                <div class="chart-container">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="genderData"></canvas>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="businessTypeData"></canvas>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="fundingSourceData"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .icon-shape {
            display: inline-flex;
            padding: 12px;
            text-align: center;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }

        .charts {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 10px;
        }

        .chart-container {
            box-sizing: border-box;
        }

        .chart-container canvas {
            width: 100% !important;
            height: auto !important;
        }
    </style>
@endsection
