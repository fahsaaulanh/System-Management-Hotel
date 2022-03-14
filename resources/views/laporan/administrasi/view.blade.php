<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <!-- Custom fonts for this template -->
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.css">

    <!-- Custom styles for this page -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{url('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body id="page-top hold-transition sidebar-mini layout-fixed">
    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="container-fluid">



            <div class="card shadow m-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <a href="/lap-administrasi"><i class="fa-solid fa-arrow-left"></i></a>
                        </div>
                        <div class="col-6 ">
                            <a class="btn btn-secondary text-white float-right" href="#" onclick="document.getElementById('print').style.display='none';window.print();"><i class="fas fa-print" id="print"></i> Print</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-6">
                            <h4>
                                <i class="fas fa-hotel rotate-n-15"></i> Insitu Hotel

                            </h4>
                        </div>
                        <div class="col-sm-6 ">
                            <div class=" float-right">Invoice #{{$checkin->kd_invoice}}</div><br>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <hr>
                    <div class="row invoice-info m-2">
                        <div class="col-sm-4 invoice-col">
                            <address>
                                <strong>
                                    Guest Name<br>
                                    No Room <br>
                                    Checkin Date<br>
                                    Checkout Date<br>
                                    Number of Guests<br>
                                </strong>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <address>
                                {{$checkin->gelar_tamu}} {{$checkin->tamu->nama}} <br>
                                {{$checkin->kamar->no_kamar}} <br>
                                <div class="badge badge-primary">
                                    {{$checkin->tanggal_checkin}}
                                </div><br>
                                <div class="badge badge-danger">
                                    {{$checkin->tanggal_checkout}}
                                </div><br>
                                {{$checkin->jumlah_tamu}}<br>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="alert alert-info">
                                <h-3 class="text-bold">{{ $checkin->kamar->typeKamar->jenis }}</h-3><br>
                                Price/Night Rp.{{ $checkin->kamar->typeKamar->harga }}<br>
                                Max Capacity {{ $checkin->kamar->max }} guests
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->



                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product / Service</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $jumlah = 0;
                                    ?>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            {{$checkin->kamar->typeKamar->jenis}}
                                        </td>
                                        <td>
                                            {{$checkin->menginap}} night
                                        </td>
                                        <td>
                                            Rp. {{ $checkin->tagihan }}
                                        </td>
                                    </tr>
                                    @foreach ($checkin->pesanLayanan as $item )
                                    <tr>
                                        <td>
                                            {{$loop->iteration + 1}}
                                        </td>
                                        <td>
                                            {{$item->layanan->layanan}}
                                        </td>
                                        <td>
                                            {{$item->qty}} {{$item->layanan->satuan}}
                                        </td>
                                        <td>
                                            Rp. {{ $item->qty * $item->layanan->harga }}
                                        </td>
                                    </tr>
                                    <?php
                                    $total = $item->qty * $item->layanan->harga;
                                    $jumlah += $total;
                                    ?>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">

                        </div>
                        <!-- /.col -->
                        <div class="col-6">


                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>Rp. {{$jumlah + $checkin->tagihan}}</td>
                                        </tr>
                                        <tr>
                                            <th>Additional Charge:</th>
                                            <td>Rp. {{$checkin->denda}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>Rp. {{$jumlah + $checkin->tagihan + $checkin->denda}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <!-- <a href="#" onclick="document.getElementById('print').style.display='none';window.print();"><i class="fas fa-print"></i> Print</a>
                <a href="#" onclick="document.getElementById('print').style.display='none';window.print();"><img src="../gambar/print-icon.png" id="print" width="25" height="25" border="0"> Cetak</a> -->


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
