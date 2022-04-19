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
                <div class="col-sm-12">
                    <div class="card shadow">
                        <div class="card card-danger card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <div class="row">
                                        <div class="col-sm-3 mb-2">
                                            <a href="{{ route('type-kamar.create') }}" class="btn btn-pink text-white">
                                                <i class="fa fa-plus"></i>
                                                Add Room Type
                                            </a>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <a class="btn btn-purple-light " href="/laporan/type-kamar/download">
                                                <i class="fas fa-file-pdf"> </i> Download
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm float-sm-right" style="width: 200px;">
                                                <form action="{{route('type-kamar-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="text" class="form-control float-right" name="jenis" placeholder="Search room type.." value="">
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
                                            <th scope="col-sm">Type</th>
                                            <th scope="col-sm">Price / night</th>
                                            <th scope="col-sm">Charge / guest</th>
                                            <th style="width: 100px;">Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($type_kamars as $typeKamar)
                                        <tr class=" table-hover">
                                            <td><a>{{ $typeKamar->jenis}}</a> </td>
                                            <td>{{ $typeKamar->harga}}</td>
                                            <td>{{ $typeKamar->denda}}</td>
                                            <td>{{ $typeKamar->keterangan}} </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a href="{{ url('/type-kamar/'.$typeKamar->id. '/edit') }}" class="btn btn-green"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form action="{{route('type-kamar.destroy', ['type_kamar'=> $typeKamar->id]) }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button " href="{{ url('/type-kamar/'.$typeKamar->id. '/edit') }}" class="btn btn-red"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <td col-smspan="6" class="text-center">No data...</td>
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
