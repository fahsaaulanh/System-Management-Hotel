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
                        <h4 class="">Room Management</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Room Management</li>
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
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a type="button" class="btn btn-pink" href="{{route('kamar.create')}}">
                                                <i class="fa fa-plus"></i>
                                                Add Room
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="btn btn-purple-light " href="/laporan/kamar/download">
                                                <i class="fas fa-file-pdf"> </i> Download
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm float-sm-right" style="width: 200px;">
                                                <form action="{{route('kamar-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="text" class="form-control float-right" name="no_kamar" placeholder="Search no room.." value="">
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
                                                <th scope="col">No Room</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Max Guest</th>
                                                <th scope="col">Status</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kamars as $kamar)
                                            <tr class=" table-hover">
                                                <td>{{ $kamar->no_kamar}}</td>
                                                <td>{{ $kamar->jenis}}</td>
                                                <td>{{ $kamar->max}}</td>
                                                <td>
                                                    @if ( $kamar->status == 'Vacant')
                                                    <div class="badge badge-success">{{ $kamar->status}}</div>
                                                    @elseif ( $kamar->status == 'Occupied')
                                                    <div class="badge badge-danger">{{ $kamar->status}}</div>
                                                    @else
                                                    <div class="badge badge-warning"> {{ $kamar->status}} </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-green" href="{{route('kamar.edit', ['kamar'=>$kamar->id])}}"><i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('kamar.destroy',['kamar'=>$kamar->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button " href="" class="btn btn-red"><i class="fa fa-trash"></i></button>
                                                    </form>
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
