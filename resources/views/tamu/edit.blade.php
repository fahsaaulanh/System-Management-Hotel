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
                        <li class="breadcrumb-item "><a href="/tamu">Guest Management</a></li>
                        <li class="breadcrumb-item active">Edit Guest Data</li>
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
                                <h4>Edit Guest Data</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('tamu.update', ['tamu' => $tamu->id ]) }}" method="post">
                                    @method('PATCH')
                                    @include('tamu.form')
                                    <button type="submit" class="btn btn-purple m-2 float-right">Update</button>
                                    <a href="{{url('/tamu') }}" class="btn btn-red m-2 float-right" href=" {{url('/tamu') }} ">Cancel</a>
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
