@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->role == 'manager' || Auth::user()->role == 'receptionist')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Kamar tersedia -->
                <div class="col-4 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-info text-uppercase mb-1">{{$kamar_tersedia}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800">Vacant</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-bed fa-4x text-info"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <a href="{{ url('/checkin') }}" class="btn btn-outline-info float-center">
                                            View Room <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- kamar terpakai -->
                <div class="col-4 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-danger text-uppercase mb-1">{{$kamar_terpakai}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800">Occupied</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-bed fa-4x text-danger"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <a href="{{ url('/checkout') }}" class="btn btn-outline-danger float-center">
                                            View Room <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kamar kotor -->
                <div class="col-4 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-success text-uppercase mb-1">{{$kamar_kotor}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800">Dirty</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-bed fa-4x text-success"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <a href="" class="btn btn-outline-success float-center">
                                            View Room <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    @endif

</div>


@endsection
