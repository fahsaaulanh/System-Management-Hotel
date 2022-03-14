@extends('layouts.app')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-8">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item "><a href="/jenis-layanan">Room Type Management</a></li>
                        <li class="breadcrumb-item active">Edit Room Type</li>

                    </ol>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Room Type</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('jenis-layanan.update', ['jenis_layanan' => $jenisLayanan->id ]) }}" method="post">
                                    @method('PATCH')
                                    @include('jenis-layanan.form')
                                    <button type="submit" class="btn btn-success m-2">Update</button>
                                    <a href="{{url('/jenis-layanan') }}" class="btn btn-danger m-2" href=" {{url('/jenis-layanan') }} ">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>



@endsection
