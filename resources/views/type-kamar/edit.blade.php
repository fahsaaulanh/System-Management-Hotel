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
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>Edit Room Type</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('type-kamar.update', ['type_kamar' => $typeKamar->id ]) }}" method="post">
                                    @method('PATCH')
                                    @include('type-kamar.form')
                                    <button type="submit" class="btn btn-purple text-white m-2 float-right">Update</button>
                                    <a href="{{url('/type-kamar') }}" class="btn btn-red m-2 float-right" href=" {{url('/type-kamar') }} ">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>




    @endsection
