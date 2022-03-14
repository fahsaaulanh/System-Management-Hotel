@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Checkin Room</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">CheckIn</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($kamars as $kamar)
                <div class="col-4 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-info text-uppercase mb-1">{{$kamar->no_kamar}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800">{{$kamar->TypeKamar->jenis}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bed fa-4x text-gray-300"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <a href="/checkin/create?id_kamar={{$kamar->id}}&no_kamar={{$kamar->no_kamar}}&jenis={{$kamar->TypeKamar->jenis}}&harga={{$kamar->TypeKamar->harga}}&max={{$kamar->max}}" class="btn btn-outline-info float-center">
                                            Check In <i class="fas fa-arrow-circle-right"></i>
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
