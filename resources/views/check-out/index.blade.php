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
                    <h4 class="">Checkout</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">CheckOut</li>
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
                <div class="col-sm-4 ">
                    <div class="swiper-slide card-red">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('img/img4.jpg') }}" alt="">
                            </div>


                            <br>
                            <b class="name ">{{$checkin->kamar->no_kamar}}</b>
                            <span class="profession">{{$checkin->gelar_tamu}}{{$checkin->tamu->nama}}</span>


                            <a href="{{ url('/checkout/'.$checkin->id.'/view') }}" class="btn btn-pink float-center">
                                Select <i class="fas fa-arrow-circle-right"></i>
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
