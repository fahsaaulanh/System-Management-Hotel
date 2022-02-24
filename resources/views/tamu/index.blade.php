@extends('layouts.app')

@section('content')
    <!-- Content Wrapper (Page Content) -->
    <div class="content-wrapper">
        <!-- Content Header (Page Header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="">Management Tamu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Management Tamu</li>
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
                                    <h3 class="card-title"> <a href="{{ route('tamu.create') }}"
                                            class="btn btn-outline-info">
                                            <i class="fa fa-plus"></i>
                                            Tambah Daftar Tamu
                                        </a>
                                    </h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 250px;">
                                            <form action="{{ route('tamu-search') }}" method="get">
                                                @csrf
                                                <div class="input-group-append">
                                                    <input type="text" class="form-control float-right" name="nama"
                                                        placeholder="Cari nama tamu.." value="">
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
                                                <th scope="col">Nama</th>
                                                <th scope="col">Usia</th>
                                                <th scope="col">No KTP</th>
                                                <th style="width: 100px;">Alamat</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tamus as $tamu)
                                                <tr class=" table-hover">
                                                    <td><a href="{{ url('/tamu/' . $tamu->id) }} ">{{ $tamu->nama }}</a>
                                                    </td>
                                                    <td>{{ $tamu->usia }}</td>
                                                    <td>{{ $tamu->no_ktp }}</td>
                                                    <td>{{ $tamu->alamat }} </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="{{ url('/tamu/' . $tamu->id . '/edit') }}"
                                                                    class="btn btn-outline-success"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                            </div>
                                                            <div class="col-6">
                                                                <form
                                                                    action="{{ route('tamu.destroy', ['tamu' => $tamu->id]) }}"
                                                                    method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="button "
                                                                        href="{{ url('/tamu/' . $tamu->id . '/edit') }}"
                                                                        class="btn btn-outline-danger"><i
                                                                            class="fa fa-trash"></i></button>
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
