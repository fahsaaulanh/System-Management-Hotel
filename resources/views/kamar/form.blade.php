<div class="col-sm-6">
    <div class="form-group">
        <label for="no_kamar">No Room</label>
        <input type="text" name="no_kamar" placeholder="Input no room ..." class="form-control @error('no_kamar') is-invalid @enderror" id="no_kamar" value="{{ $kamar->no_kamar ?? '' }}">
        @error('no_kamar')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

</div>

<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="max">Max Capacity</label>
            <input type="text" name="max" placeholder="Input max capacity" class="form-control @error('max') is-invalid @enderror" id="max" n value="{{ $kamar->max ?? '' }}">
            @error('max')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="custom-select @error('status') is-invalid @enderror" value="{{$kamar->status ?? ''}}">
                <option value="">-Room Status-</option>
                <option value="Vacant" {{ ( ( $kamar['status'] ??'')=='Vacant') ? 'selected' : '' }}>Vacant</option>
                <option value="Dirty" {{ ( ( $kamar['status'] ??'')=='Dirty') ? 'selected' : '' }}>Dirty</option>
                <option value="Occupied" {{ ( ( $kamar['status'] ??'')=='Occupied') ? 'selected' : '' }}>Occupied</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

@include('kamar.modal')
