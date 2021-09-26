@extends('partials.template')

@section('container')
<h2>Form Input Data Vaksin</h2>
<form action="{{ url('dataVaksin') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="jenisVaksin" class="form-control-label">Jenis Vaksin</label>
        <select class="form-control" id="jenisVaksin" name="jenisVaksin">
            <option value="Sinovac">Sinovac</option>
            <option value="Astra Zeneca">Astra Zeneca</option>
            <option value="Pfizer">Pfizer</option>
            <option value="Moderna">Moderna</option>
          </select>
    </div>
    <div class="form-group">
        <label for="tglVaksin" class="form-control-label">Tanggal Distribusi</label>
        <input class="form-control" type="datetime-local" id="tglDistribusi" name="tglDitribusi"  value="{{ old('tglDistribusi') }}">
        <span style="color:red">@error('tglDistribusi')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="namaVaksinator" class="form-control-label">Nama Distributor</label>
        <input class="form-control" type="text" id="namaDistributor" name="namaDistributor"  value="{{ old('namaDistributor') }}">
        <span style="color:red">@error('namaDistributor')
            {{ $message }}
        @enderror</span>
        </div>
</form>
<div class="d-flex justify-content-start">
    <a href="{{ route('dataVaksin.index') }}">
        <button class="btn btn-icon btn-secondary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
        <span class="btn-inner--text">Kembali</span>
    </button>
    </a>
</div>
@endsection