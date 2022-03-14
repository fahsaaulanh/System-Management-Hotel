@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Order Service</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Order Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($jenis_layanans as $jenis_layanan)
                <div class="col-4 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-success text-uppercase mb-1">{{$jenis_layanan->kategori}}
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-12 ">
                                        <a href="{{ url('/pesan-layanan/'.$checkin_id.'/pilih-menu/'.$jenis_layanan->id) }}" class="btn btn-outline-success float-center">
                                            Order <i class="fas fa-arrow-circle-right"></i>
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
