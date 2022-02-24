@csrf
<div class="row">

    <div class="col-6">
        <div class="form-group">
            <label for="jenis">Type</label>
            <input type="text" placeholder="Masukan Jenis Kamar ..." class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ $typeKamar->jenis ?? '' }}">
            @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="harga">Harga / Malam</label>
            (Rp.)<input type="harga" placeholder="Masukan harga kamar / malam ..." class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $typeKamar->harga ?? '' }}">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div class="row">

    <div class="col-6">
        <div class="form-group">
            <label for="denda">Biaya Tambahan / Orang</label>
            (Rp.)<input type="number" placeholder="Masukan biaya tambahn ..." class="form-control @error('denda') is-invalid @enderror" id="denda" name="denda" value="{{ $typeKamar->denda ?? '' }}">
            @error('denda')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="col-6">
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" placeholder="Tulis detail kamar ..." class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $typeKamar->keterangan ?? '' }}">
            @error('keterangan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
