@csrf

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="kd_invoice">#Invoice</label>
            <input type="text" name="kd_invoice" class="form-control @error('kd_invoice') is-invalkd_invoice @enderror" kd_invoice="kd_invoice" value="{{ $kode_invoice ?? '' }}" disabled>
            @error('kd_invoice')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="nama_tamu">Guest Name</label>
            <div class="row">
                <div class="col-4">
                    <select name="gelar_tamu" class="form-control" id="">
                        <option value="Mrs.">Mrs.</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Miss.">Miss.</option>
                    </select>
                </div>
                <div class="col-8">
                    <select name="tamu_id" id="tamu_id" class="form-control @error('tamu_id') is-invalid @enderror">
                        <option value="">-search guest name-</option>
                        @foreach ($tamus as $tamu )
                        <option value="{{$tamu->id}}">{{$tamu->nama}}</option>
                        @endforeach
                    </select>
                    @error('tamu_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-6">
        <div class="alert alert-info">
            <h-3 class="text-bold">{{ app('request')->input('jenis') ?? ''}}</h-3>
            <p>Price/Night Rp.{{ app('request')->input('harga') ?? ''}}</p>
            Max Capacity {{ app('request')->input('max') ?? ''}} guests
        </div>
    </div>

    <div class="col-6">
        <div class="alert alert-secondary">
            <a href="/tamu/create" class="text-blue">Click here</a>
            <p>If the guest name is not exist, to add to the guest list</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="tanggal_checkin">CheckIn Date</label>
            <div class="row">
                <div class="col-8">
                    <input type="date" name="tanggal_checkin" id="tanggal_checkin" class="form-control @error('tanggal_checkin') is-invalid @enderror" value="{{ date('Y-m-d') }}">
                    @error('tanggal_checkin')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-4">
                    <input type="time" class="form-control" value="14:00" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="tanggal_checkout">Checkout Date</label>
            <div class="row">
                <div class="col-8">
                    <input type="date" name="tanggal_checkout" id="tanggal_checkout" class="form-control @error('tanggal_checkout') is-invalid @enderror">
                    @error('tanggal_checkout')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-4">
                    <input type="time" class="form-control" value="12:00" disabled>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="jumlah_tamu">Number Of Guests</label>
            <input type="number" name="jumlah_tamu" class="form-control @error('jumlah_tamu') is-invaljumlah_tamu @enderror" jumlah_tamu="jumlah_tamu" value="">
            @error('jumlah_tamu')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="deposit">Deposit</label>
            <input type="number" name="deposit" class="form-control @error('deposit') is-invaldeposit @enderror" deposit="deposit" value="">
            @error('deposit')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            @error('statys')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            @error('total_biaya')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<input type="hidden" name="kamar_id" value="{{ app('request')->input('id_kamar') ?? ''}}" id="">
<input type="hidden" name="harga" value="{{ app('request')->input('harga') ?? ''}}" id="">
<input type="hidden" name="max" value="{{ app('request')->input('max') ?? ''}}" id="">
