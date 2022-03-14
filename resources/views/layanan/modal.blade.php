<!-- modal -->
<div class="modal fade " id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lerge">
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Service Type</h4>
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
                                <th scope="col">Category</th>
                                <th style="width: 100px;">Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jenis_layanans as $jenisLayanan)
                            <tr class=" table-hover">
                                <td><a href="?menu=penjualan&jenis_layanan_id={{$jenisLayanan->id}}&kategori={{$jenisLayanan->kategori}}">{{ $jenisLayanan->kategori}}</a> </td>
                                <td>{{ $jenisLayanan->keterangan}} </td>
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
