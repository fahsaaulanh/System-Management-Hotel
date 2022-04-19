@csrf
<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="kategori">Category</label>
            <input type="text" placeholder="Input room type ..." class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{ $jenisLayanan->kategori ?? '' }}">
            @error('kategori')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>



</div>

<div class="row">



    <div class="col-sm-6">
        <div class="form-group">
            <label for="keterangan">Description</label>
            <input type="text" placeholder="Input description ..." class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $jenisLayanan->keterangan ?? '' }}">
            @error('keterangan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
