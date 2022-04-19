@extends('layouts.app')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="">Guest Management</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Guest Management</li>
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
                        <div class="card shadow card-danger card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <div class="row">
                                        <div class="col-sm-3 mb-2">
                                            <a href="{{ route('tamu.create') }}" class="btn btn-pink text-white">
                                                <i class="fa fa-plus"></i>
                                                Add Guest
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mb-2">
                                            <a class="btn btn-purple-light " href="/laporan/tamu/download">
                                                <i class="fas fa-file-pdf"> </i> Download
                                            </a>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group input-group-sm float-sm-right" style="width: 200px;">
                                                <form action="{{ route('tamu-search') }}" method="get">
                                                    @csrf
                                                    <div class="input-group-append">
                                                        <input type="text" class="form-control float-right" name="nama" placeholder="Search guest name..." value="">
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
                            <div class="card-body table-responsive p-0" style="height: 250px;">
                                <table class="table table-head-fixed table table-hover text-nowrap m-2">
                                    <thead>
                                        <tr class="table">
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">No ID</th>
                                            <th class="col-min">Address</th>
                                            <th class="col-auto"></th>
                                            <th class="col-auto"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tamus as $tamu)
                                        <tr class=" table-hover">
                                            <td>{{ $tamu->nama }}</td>
                                            <td>{{ $tamu->usia }}</td>
                                            <td>{{ $tamu->jenis_identitas }}-{{ $tamu->no_ktp }}</td>
                                            <td>{{ $tamu->alamat }} </td>
                                            <td>
                                                <a href="{{ url('/tamu/' . $tamu->id . '/edit') }}" class="btn btn-green text-white"><i class="fa fa-pencil"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{route('tamu.destroy',['tamu'=>$tamu->id])}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" href="#" class=" btn btn-red"><i class="fa fa-trash"></i></button>
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
@endsection
