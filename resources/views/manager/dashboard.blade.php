@extends('manager.layouts')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Status Box -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- Status Box 1 -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>7</h3>
                <p>Rooms Available</p>
              </div>
              <div class="icon">
                <i class="fa fa-door-open"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- Status Box 2 -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>14</h3>
                <p>Rooms Occupied</p>
              </div>
              <div class="icon">
                <i class="fa fa-door-closed"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- Status Box 3 -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3</h3>
                <p>Rooms Dirty</p>
              </div>
              <div class="icon">
                <i class="fa fa-broom"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- Status Box 4 -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>8.000.000 IDR</h3>
                <p>Expenses</p>
              </div>
              <div class="icon">
                <i class="fa fa-coins"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Staying Guests</h3>
              </div>
              <div class="card-body">
                There are currently no Guests staying at the hotel.
              </div>
            </div>
          </div>
        </div>
      </div>
      
</div>

@endsection

