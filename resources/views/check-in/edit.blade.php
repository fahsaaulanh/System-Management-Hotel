@extends('layouts.app')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item "><a href="/tamu">Management Tamu</a></li>
                        <li class="breadcrumb-item active">Edit Data Tamu</li>

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
                                <h4>Edit Data Tamu</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('tamu.update', ['tamu' => $tamu->id ]) }}" method="post">
                                    @method('PATCH')
                                    @include('tamu.form')
                                    <button type="submit" class="btn btn-outline-success mb-2">Update</button>
                                    <a href="{{url('/tamu') }}" class="btn btn-outline-danger mb-2" href=" {{url('/tamu') }} ">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    @include('layouts.footer')

    @endsection
