<div class="col-6">
    <div class="form-group">
        <label for="no_kamar">Nomor Kamar</label>
        <input type="text" name="no_kamar" placeholder="Masukan no kamar Kamar ..." class="form-control @error('no_kamar') is-invalid @enderror" id="no_kamar" value="{{ $kamar->no_kamar ?? '' }}">
        @error('no_kamar')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

</div>

<div class="row">

    <div class="col-6">
        <div class="form-group">
            <label for="max">Max Kapasitas</label>
            <input type="text" name="max" placeholder="Masukan max kapasitas per kamar" class="form-control @error('max') is-invalid @enderror" id="max" n value="{{ $kamar->max ?? '' }}">
            @error('max')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="col-6">
        <div class="form-group">
            <label for="status">Status Kamar</label>
            <select id="status" name="status" class="custom-select @error('status') is-invalid @enderror" value="{{$kamar->status ?? ''}}">
                <option value=""></option>
                <option value="Tersedia" {{ ( ( $kamar['status'] ??'')=='Tersedia') ? 'selected' : '' }}>Tersedia</option>
                <option value="Kotor" {{ ( ( $kamar['status'] ??'')=='Kotor') ? 'selected' : '' }}>Kotor</option>
                <option value="Terpakai" {{ ( ( $kamar['status'] ??'')=='Terpakai') ? 'selected' : '' }}>Terpakai</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

@include('kamar.modal')
