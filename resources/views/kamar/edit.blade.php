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
                        <li class="breadcrumb-item "><a href="/kamar">Room Management</a></li>
                        <li class="breadcrumb-item active">Edit Room</li>

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
                                <h4>Edit Room</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('kamar.update', ['kamar' => $kamar->id ]) }}" method="post">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            @method('PATCH')
                                            @csrf
                                            <label for="type_kamar_id">Room Type</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control  @error('type_kamar_id') is-invalid @enderror" value="{{ app('request')->input('jenis') ?? $kamar->jenis }}" disabled>
                                                <input type="hidden" class="" name="type_kamar_id" value="{{ app('request')->input('type_kamar_id') ?? $kamar->type_kamar_id }}">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#modal-xl">cari</button>
                                                </span>
                                            </div>
                                        </div>
                                        @include('kamar.form')
                                        <button type="submit" class="btn btn-purple float-right mb-2">Update</button>
                                        <a href="{{url('/kamar') }}" class="btn btn-red float-right mb-2" href=" {{url('/kamar') }} ">Cancel</a>
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
