@extends('layouts.app')

@section('custom_css')
<link href="{{ asset('css/custom-color.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Pesan Layanan</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Pesan Layanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($checkins as $checkin)
                <div class="col-4 mb-4">
                    <div class="card border-left-purple shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-purple-light text-uppercase mb-1">{{$checkin->kamar->no_kamar}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800">{{$checkin->gelar_tamu}} {{$checkin->tamu->nama}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-bed fa-4x text-purple-light"></i>
                                </div>
                                <div class=" row">
                                    <div class="col-12 ">
                                        <a href="{{url('/pesan-layanan/'.$checkin->id.'/pilih-menu') }}" class="btn btn-outline-purple float-center">
                                            View Room <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </section>

</div>


@endsection
