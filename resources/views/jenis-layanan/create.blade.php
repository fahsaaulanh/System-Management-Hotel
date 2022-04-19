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
                        <li class="breadcrumb-item "><a href="/type-kamar">Room Type Management</a></li>
                        <li class="breadcrumb-item active">Add Room Type</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4>Add Room Type</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('jenis-layanan.store') }}" method="post">
                                @include('jenis-layanan.form')
                                <button type="submit" class="btn btn-purple-light m-2 float-right">Add</button>
                                <a href="{{url('/jenis-layanan') }}" class=" btn btn-red m-2 float-right">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>




@endsection
