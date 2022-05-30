@extends('layouts.app')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card shadow mb-4">
                        <div class="card-header">
                            <h4>Room Reservation #{{ app('request')->input('no_kamar') ?? ''}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('checkin.store') }}" method="post">
                                @include('check-in.form')
                                <button type="submit" class="btn btn-purple-light m-2 float-sm-right">Checkin</button>
                                <a href="{{url('/checkin') }}" class=" btn btn-red m-2 float-sm-right">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>




@endsection
