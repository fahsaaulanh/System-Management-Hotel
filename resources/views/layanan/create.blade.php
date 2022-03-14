@extends('layouts.app')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/layanan">Service Management</a></li>
                        <li class="breadcrumb-item active">Add Service</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Service</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('layanan.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="jenis_layanan_id">Service Category</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control  @error('jenis_layanan_id') is-invalid @enderror" value="{{ app('request')->input('kategori') ?? ''}}" disabled>
                                        <input type="hidden" class="" name="jenis_layanan_id" value="{{ app('request')->input('jenis_layanan_id') ?? ''}}">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">Search</button>
                                        </span>
                                    </div>
                                </div>
                                @include('layanan.form')
                                <button type="submit" class="btn btn-info m-2">Add</button>
                                <a href="{{url('/layanan') }}" class=" btn btn-danger m-2">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>




@endsection
