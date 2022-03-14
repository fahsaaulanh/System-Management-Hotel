<!-- modal -->
<div class="modal fade " id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Room Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- modal body -->
            <div class="modal-body">
                <div class="card-tittle"></div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed table table-hover text-nowrap m-2">
                        <thead>
                            <tr class="table">
                                <th scope="col">Type</th>
                                <th scope="col">Price / Night</th>
                                <th scope="col">Charge / Guest</th>
                                <th style="width: 100px;">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($type_kamars as $typeKamar)
                            <tr class=" table-hover">
                                <td><a href="?menu=penjualan&type_kamar_id={{$typeKamar->id}}&jenis={{$typeKamar->jenis}}">{{ $typeKamar->jenis}}</a> </td>
                                <td>{{ $typeKamar->harga}}</td>
                                <td>{{ $typeKamar->denda}}</td>
                                <td>{{ $typeKamar->keterangan}} </td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">No data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <!-- modal footer -->
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
