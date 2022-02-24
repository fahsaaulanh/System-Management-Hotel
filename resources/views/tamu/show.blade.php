@extends('layouts.app')

@section('content')


<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="">Detail Data Tamu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/tamu">Management Tamu</a></li>
                        <li class="breadcrumb-item active">Detail Data Tamu</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-8 flex-center">

                    <div class="card card-widget widget-user shadow">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-success">
                            <h5 class="widget-user-desc">Detail Data Tamu</h5>
                            <h3 class="widget-user-username"> {{ $tamu->nama}} </h3>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{URL::asset('/users/images/no-image.png')}}" alt="User Avatar">
                        </div>
                        <div class="card-footer p-0">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6"></div>
                            </div>
                            <div class="row m-auto mt-10">
                                <div class="col-6">
                                    <b>Nama</b>
                                </div>
                                <div class="col-6"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

@include('layouts.footer')

@endsection
