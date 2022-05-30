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
                <div class="col-6">
                    <h4 class="">Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->role == 'manager' || Auth::user()->role == 'receptionist')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row m-2">
                <!-- Kamar kotor -->
                <div class="col-sm-4 ">
                    <div class="swiper-slide card-custom">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('img/img1.jpg') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Vacant Room</span>
                                <span class="profession"></span>
                            </div>
                            <a href="/checkin" class="btn btn-purple">
                                Vacant Room
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4 ">
                    <div class="swiper-slide card-custom">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('img/img2.jpg') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Occupied Room</span>
                                <span class="profession"></span>
                            </div>
                            <a href="/checkout" class="btn btn-purple">
                                Occupied Room
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    <div class=" swiper-slide card-custom">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('img/img3.jpg') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Dirty Room</span>
                                <span class="profession"></span>
                            </div>
                            <a href="/cleanUp" class="btn btn-purple"">
                                Dirty Room
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    @endif

</div>


@endsection
