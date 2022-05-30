@extends('layouts.app')
@section('custom_css')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection
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
                <div class="col-sm-4 ">
                    <div class="swiper-slide card-custom">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('img/img1.jpg') }}" alt="">
                            </div>


                            <div class="name-profession">
                                <span class="name">{{$kamar->no_kamar}}</span>
                                <span class="profession">{{$kamar->TypeKamar->jenis}}</span>
                            </div>

                            <a href="/checkin/create?id_kamar={{$kamar->id}}&no_kamar={{$kamar->no_kamar}}&jenis={{$kamar->TypeKamar->jenis}}&harga={{$kamar->TypeKamar->harga}}&max={{$kamar->max}}" class="btn btn-purple float-center">
                                Check In <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

</div>


@endsection
