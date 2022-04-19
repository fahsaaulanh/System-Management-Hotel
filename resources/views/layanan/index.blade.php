@extends('layouts.app')

@section('content')


<div>
    <!-- Content Wrapper (Page Content) -->
    <div class="content-wrapper">
        <!-- Content Header (Page Header) -->
        <div class="content-header">
            <div class="container-fluid">

                <div class="row ">
                    <div class="col-sm-6">
                        @if ($errors->any())
                        tes
                        @endif
                        <h3 class="">Service Management</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Service Management</li>
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
                        <div class="card shadow mb-2">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-2">
                                            <a type="button" class="btn btn-pink" href="{{route('layanan.create')}}">
                                                <i class="fa fa-plus"></i>
                                                Add Service
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="btn btn-purple-light " href="/laporan/layanan/download">
                                                <i class="fas fa-file-pdf"> </i> Download
                                            </a>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="input-group input-group-sm float-right" style="width: 250px;">
                                                <form action="{{route('layanan-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="text" class="form-control float-right" name="layanan" placeholder="Search service.." value="">
                                                        <button type="submit" class="btn btn-purple">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed table table-hover text-nowrap m-2">
                                        <thead>
                                            <tr class="table">
                                                <th scope="col">Service Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($layanans as $layanan)
                                            <tr class=" table-hover">
                                                <td>{{ $layanan->layanan}}</td>
                                                <td>{{ $layanan->JenisLayanan->kategori}}</td>
                                                <td>{{ $layanan->harga}} / {{$layanan->satuan}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="btn btn-green" href="{{route('layanan.edit', ['layanan'=>$layanan->id])}}"><i class="fa fa-pencil"></i></a>
                                                        </div>
                                                        <div class="col-6">
                                                            <form action="{{route('layanan.destroy',['layanan'=>$layanan->id])}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" href="#" class=" btn btn-red"><i class="fa fa-trash"></i></button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </td>
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




</div>




@endsection
