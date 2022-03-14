@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Room Service</h4>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card card-danger card-outline">
                            <div class="card-header">

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed table table-hover text-nowrap m-2">
                                    <thead>
                                        <tr class="table">
                                            <th scope="col">Service Name</th>
                                            <th scope="col">qty</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($menus as $menu)
                                        <tr class=" table-hover">
                                            <td>{{ $menu->layanan }}</td>
                                            <form action="{{ Route('pesan-layanan.store') }}" method="POST">
                                                @csrf
                                                <td>
                                                    <input type="text" class="form-control" name="qty" style="width: auto;">
                                                    <input type="hidden" name="checkin_id" id="" value="{{$checkin_id}}">
                                                    <input type="hidden" name="layanan_id" id="" value="{{$menu->id}}">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-secondary">Order</button>
                                                </td>
                                            </form>
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
