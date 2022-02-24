@extends('layouts.app')

@section('content')


<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="">Management Type Kamar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Management Type Kamar</li>
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
                                <h3 class="card-title"> <a href="{{ route('type-kamar.create') }}" class="btn btn-outline-info">
                                        <i class="fa fa-plus"></i>
                                        Tambah Type Kamar
                                    </a>
                                </h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 250px;">
                                        <form action="{{route('type-kamar-search') }}" method="get">
                                            @csrf
                                            <div class="input-group-append">
                                                <input type="text" class="form-control float-right" name="jenis" placeholder="Cari type Kamar.." value="">
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
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Harga / malam</th>
                                            <th scope="col">Harga / orang</th>
                                            <th style="width: 100px;">Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($type_kamars as $typeKamar)
                                        <tr class=" table-hover">
                                            <td><a href="{{url('/typeKamar/'.$typeKamar->id ) }} ">{{ $typeKamar->jenis}}</a> </td>
                                            <td>{{ $typeKamar->harga}}</td>
                                            <td>{{ $typeKamar->denda}}</td>
                                            <td>{{ $typeKamar->keterangan}} </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="{{ url('/type-kamar/'.$typeKamar->id. '/edit') }}" class="btn btn-outline-success"><i class="fa fa-pencil"></i> Edit</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <form action="{{route('type-kamar.destroy', ['type_kamar'=> $typeKamar->id]) }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button " href="{{ url('/type-kamar/'.$typeKamar->id. '/edit') }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
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

@include('layouts.footer')

@endsection
