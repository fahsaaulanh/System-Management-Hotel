@extends('layouts.app')

@section('content')


<div>
    <!-- Content Wrapper (Page Content) -->
    <div class="content-wrapper">
        <!-- Content Header (Page Header) -->
        <div class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="">Management Kamar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Management Kamar</li>
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
                                    <a type="button" class="btn btn-outline-info" href="{{route('kamar.create')}}">
                                        <i class="fa fa-plus"></i>
                                        Tambah Kamar
                                    </a>


                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 250px;">
                                            <form action="{{route('kamar-search') }}" method="get">
                                                @csrf
                                                <div class="input-group-append">
                                                    <input type="text" class="form-control float-right" name="no_kamar" placeholder="Cari nomor kamar.." value="">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed table table-hover text-nowrap">
                                        <thead>
                                            <tr class="table-danger">
                                                <th scope="col">No Kamar</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Max Orang</th>
                                                <th style="width: 100px;">Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kamars as $kamar)
                                            <tr class=" table-hover">
                                                <td>{{ $kamar->no_kamar}}</td>
                                                <td>{{ $kamar->jenis}}</td>
                                                <td>{{ $kamar->max}}</td>
                                                <td>{{ $kamar->status}} </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="btn btn-outline-success" href="{{route('kamar.edit', ['kamar'=>$kamar->id])}}"><i class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <form action="{{route('kamar.destroy',['kamar'=>$kamar->id])}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="button " href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <td colspan="6" class="text-center">Tidak ada data...</td>
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



@include('layouts.footer')

@endsection
