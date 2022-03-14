@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Download Laporan Format PDF</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- pdf tamu -->
                    <div class="col-4 mb-2">
                        <div class="card  border-left-secondary shadow h-100 ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center m-auto ">
                                    <div class="col">
                                        <div class="h6 font-weight-bold text-secondary">Laporan Daftar Tamu
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a class="btn btn-outline-secondary position-relative mt-2" href="/laporan/tamu/download">
                                            <i class="fas fa-download"> </i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- daftar kamar -->
                    <div class="col-4 mb-2">
                        <div class="card border-left-secondary shadow h-100 ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center m-auto ">
                                    <div class="col">
                                        <div class="h6 font-weight-bold text-secondary">Lap. Daftar Kamar
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fas fa-door-closed fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a class="btn btn-outline-secondary position-relative mt-2" href="/laporan/kamar/download">
                                            <i class="fas fa-download"> </i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- daftar Type kamar -->
                    <div class="col-4 mb-2">
                        <div class="card border-left-secondary shadow h-100 ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center m-auto ">
                                    <div class="col">
                                        <div class="h6 font-weight-bold text-secondary">Lap. Type Kamar
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bed fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a class="btn btn-outline-secondary position-relative mt-2" href="/laporan/type-kamar/download">
                                            <i class="fas fa-download"> </i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- daftar Layanan -->
                    <div class="col-4 mb-2">
                        <div class="card border-left-secondary shadow h-100 ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center m-auto ">
                                    <div class="col">
                                        <div class="h6 font-weight-bold text-secondary">Lap. Daftar Layanan
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-bell-concierge fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a class="btn btn-outline-secondary position-relative mt-2" href="/laporan/layanan/download">
                                            <i class="fas fa-download"> </i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- daftar jenis layanan -->
                    <div class="col-4 mb-2">
                        <div class="card border-left-secondary shadow h-100 ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center m-auto ">
                                    <div class="col">
                                        <div class="h6 font-weight-bold text-secondary">Lap. Jenis Layanan
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-filter fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a class="btn btn-outline-secondary position-relative mt-2" href="/laporan/jenis-layanan/download">
                                            <i class="fas fa-download"> </i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
