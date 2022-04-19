@extends('layouts.app')

@section('content')


<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Room Type Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Room Type Management</li>
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
                                        <div class="col-3">
                                            <a href="{{ route('jenis-layanan.create') }}" class="btn btn-pink">
                                                <i class="fa fa-plus"></i>
                                                Add Room Type
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a class="btn btn-purple-light " href="/laporan/jenis-layanan/download">
                                                <i class="fas fa-file-pdf"> </i> Download
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm float-right" style="width: 250px;">
                                                <form action="{{route('jenis-layanan-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="text" class="form-control float-right" name="kategori" placeholder="Search room type.." value="">
                                                        <button type="submit" class="btn btn-purple">
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
                                            <th scope="col">Type</th>
                                            <th style="width: 100px;">Description</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($jenis_layanans as $jenis_layanan)
                                        <tr class=" table-hover">
                                            <td>{{ $jenis_layanan->kategori}}</td>
                                            <td>{{ $jenis_layanan->keterangan}} </td>
                                            <td></td>
                                            <td>
                                                <div class="row ">
                                                    <div class="col-4">
                                                        <a href="{{ url('/jenis-layanan/'.$jenis_layanan->id. '/edit') }}" class="btn btn-green"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <form action="{{route('jenis-layanan.destroy', ['jenis_layanan'=> $jenis_layanan->id]) }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button " href="{{ url('/jenis-layanan/'.$jenis_layanan->id. '/edit') }}" class="btn btn-red"><i class="fa fa-trash"></i></button>
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



@endsection
