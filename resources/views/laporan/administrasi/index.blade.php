@extends('layouts.app')

@section('content')


<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Report Reservation Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Report Reservation Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card card-danger card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <div class="row">
                                        <div class="col-6">

                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm float-right" style="width: 250px;">
                                                <form action="{{route('lap-administrasi-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="date" class="form-control float-right" name="tgl_checkin" placeholder="Search by checkin date.." value="">
                                                        <button type="submit" class="btn btn-pink">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed table table-hover text-nowrap m-2">
                                    <thead>
                                        <tr class="table">
                                            <th scope="col">#Invoice</th>
                                            <th>Guest Name</th>
                                            <th>Checkout Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($checkins as $checkin)
                                        <tr class=" table-hover">
                                            <td>{{ $checkin->kd_invoice}}</td>
                                            <td>{{ $checkin->tamu->nama}}</td>
                                            <td>{{ $checkin->tanggal_checkout}}</td>
                                            <td>
                                                <a class="btn btn-purple text-white" href="{{url('lap-administrasi/'.$checkin->id ) }}"><i class="fa-solid fa-eye"></i> View</a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @empty
                                        <td colspan="6" class="text-center">No data...</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



@endsection
