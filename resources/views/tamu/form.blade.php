@csrf
<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" placeholder="Input name..." class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}} {{ $tamu->nama ?? '' }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}} {{ $tamu->email ?? '' }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label for="no_ktp">No ID</label>
            <div class="row">
                <div class="col-sm-4">
                    <select name="jenis_identitas" class="custom-select" id="">
                        <option value="KTP">KTP</option>
                        <option value="SIM">SIM</option>
                        <option value="Passport">Passport</option>
                        <option value="lainnya">Others</option>
                    </select>
                </div>
                <div class="col-sm-8">
                    <input type="text" placeholder="Input No ID ..." class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" name="no_ktp" value="{{old('no_ktp')}} {{ $tamu->no_ktp ?? '' }}">
                    @error('no_ktp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group">
            <label for="wn">Citizen</label>
            <input type="text" class="form-control @error('wn') is-invalid @enderror" placeholder="Input citizen..." id="wn" name="wn" value="{{old('wn')}} {{ $tamu->wn ?? '' }}">
            @error('wn')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label for="usia">Age</label>
            <input type="number" class="form-control @error('usia') is-invalid @enderror" id="usia" name="usia" value="{{old('usia')}} <?php if (isset($tamu->usia)) {
                                                                                                                                            echo $tamu->usia;
                                                                                                                                        } ?> ">
            @error('usia')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


</div>


<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="textarea" class="form-control @error('alamat') is-invalid @enderror" placeholder="Input address.." id="alamat" name="alamat" value="{{old('alamat')}}{{ $tamu->alamat ?? '' }}">
            @error('alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Gender</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="L" {{ old('jk')=='L' ? 'checked': '' }} {{ $tamu['jk']=='L' ? 'checked': '' }}>
                    <label class="form-check-label" for="laki_laki">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="P" {{ old('jk')=='P' ? 'checked' : '' }} {{ $tamu['jk']=='P' ? 'checked': '' }}>
                    <label class="form-check-label" for="perempuan">Famale</label>
                </div>
                @error('jk')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
