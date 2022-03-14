@extends('layouts.app')

@section('content')

<div class="card shadow">
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


        <h5>Guest Billing Details</h5>
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

                <form action="{{ Route('checkin.update' , ['checkin' => $checkin->id] ) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="status" value="Dirty">
                    <input type="hidden" name="route" value="checkout">
                    <button type="submit" class="btn btn-danger float-right" style="margin-right: 5px;">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i> Checkout
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
