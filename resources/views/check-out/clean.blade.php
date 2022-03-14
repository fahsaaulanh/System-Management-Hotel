@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Clean Up</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Clean Up</li>
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
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-secondary text-uppercase mb-1">{{$checkin->kamar->no_kamar}}
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bed fa-4x text-secondary"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <form action="{{ Route('checkin.update' , ['checkin' => $checkin->id] ) }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <input type="hidden" name="status" value="Vacant">
                                            <input type="hidden" name="route" value="cleanUp">
                                            <button type="submit" class="btn btn-secondary float-right" style="margin-right: 5px;">
                                                <i class="fas fa-arrow-circle-right"></i> Clean Up
                                            </button>
                                        </form>
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
