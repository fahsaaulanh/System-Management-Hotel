@extends('layouts.app')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/kamar">Mnagement Kamar</a></li>
                        <li class="breadcrumb-item active">Tambah kamar</li>
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
                            <h4>Tambah Kamar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('kamar.store') }}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-6">
                                        <label for="id_type_kamar">Type Kamar</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control  @error('id_type_kamar') is-invalid @enderror" value="{{ app('request')->input('jenis') ?? ''}}" disabled>
                                            <input type="hidden" class="" name="id_type_kamar" value="{{ app('request')->input('id_type_kamar') ?? ''}}">
                                            <span class="input-group-append">
                                                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">cari</a>
                                            </span>
                                        </div>
                                    </div>
                                    @include('kamar.form')
                                    <button type="submit" class="btn btn-outline-success mb-2">Daftar</button>
                                    <a href="{{url('/kmaar') }}" class=" btn btn-outline-danger mb-2">Cancel</a>
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
