<div class="form-group">
    <label for="layanan">Service</label>
    <input type="text" name="layanan" placeholder="Input service ..." class="form-control @error('layanan') is-invalid @enderror" id="layanan" value="{{ $layanan->layanan ?? '' }}">
    @error('layanan')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="harga">Price (Rp.)</label>
    <input type="number" name="harga" placeholder="Input price..." class="form-control @error('harga') is-invalid @enderror" id="harga" n value="{{ $layanan->harga ?? '' }}">
    @error('harga')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="satuan">Unit</label>
    <input type="text" name="satuan" placeholder="(example: pcs)" class="form-control @error('satuan') is-invalid @enderror" id="satuan" n value="{{ $layanan->satuan ?? '' }}">
    @error('satuan')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>






@include('layanan.modal')
