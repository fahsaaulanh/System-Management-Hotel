@csrf
<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="jenis">Type</label>
            <input type="text" placeholder="Input room type ..." class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ $typeKamar->jenis ?? '' }}">
            @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="harga">Price / Night</label>
            (Rp.)<input type="harga" placeholder="Input price / night..." class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $typeKamar->harga ?? '' }}">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="denda">Additional Charge / guest</label>
            (Rp.)<input type="number" placeholder="Input additional charge ..." class="form-control @error('denda') is-invalid @enderror" id="denda" name="denda" value="{{ $typeKamar->denda ?? '' }}">
            @error('denda')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <label for="keterangan">Description</label>
            <input type="text" placeholder="Input detail room's ..." class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $typeKamar->keterangan ?? '' }}">
            @error('keterangan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
