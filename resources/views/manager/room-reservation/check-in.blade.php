@extends('manager.layouts')

@section('content')
<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Check-In</h1>
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
              <div class="card-header">
                <h3 class="card-title">List of available rooms</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Room No.</th>
                    <th>Room Type</th>
                    <th>Bed Capacity</th>
                    <th>Price</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>101</td>
                    <td>Single</td>
                    <td>1</td>
                    <td>181.360 IDR</td>
                    <td>Available</td>
                    <td><button type="button" class="btn btn-outline-success" onclick="location.href='#'">Purchase</button></td>
                  </tr>
                  <tr>
                    <td>102</td>
                    <td>Double</td>
                    <td>2</td>
                    <td>334.387 IDR</td>
                    <td>Occupied</td>
                    <td><button type="button" class="btn btn-outline-success" onclick="location.href='#'">Purchase</button></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

@endsection
