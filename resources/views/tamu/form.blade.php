@csrf
<div class="row">

    <div class="col-6">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" placeholder="Masukan nama ..." class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $tamu->nama ?? '' }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $tamu->email ?? '' }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div class="row">

    <div class="col-4">
        <div class="form-group">
            <label for="no_ktp">No KTP</label>
            <input type="text" placeholder="Masukan no identitas ..." class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" name="no_ktp" value="{{ $tamu->no_ktp ?? '' }}">
            @error('no_ktp')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="col-4">
        <div class="form-group">
            <label for="wn">Warga Negara</label>
            <input type="text" class="form-control @error('wn') is-invalid @enderror" id="wn" name="wn" value="{{ $tamu->wn ?? '' }}">
            @error('wn')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <label for="usia">Usia</label>
            <input type="number" class="form-control @error('usia') is-invalid @enderror" id="usia" name="usia" value="{{ $tamu->usia ?? '' }}">
            @error('usia')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


</div>


<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="textarea" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $tamu->alamat ?? '' }}">
            @error('alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="L" {{ old('jk')=='L' ? 'checked': '' }}>
                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="P" {{ old('jk')=='P' ? 'checked' : '' }}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                @error('jk')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
