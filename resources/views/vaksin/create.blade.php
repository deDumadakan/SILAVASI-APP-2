@extends('partials.template')

@section('container')
<h2>Form Vaksin</h2>
<form action="{{ url('vaksin') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nik" class="form-control-label">NIK</label>
        <input class="form-control" type="text" id="nik" name="nik" value="{{ old('nik') }}">
        <span style="color:red">@error('nik')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="nama" class="form-control-label">Nama</label>
        <input class="form-control" type="text" id="nama" name="nama" value="{{ old('nama') }}">
        <span style="color:red">@error('nama')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="str" class="form-control-label">STR</label>
        <input class="form-control" type="text" id="str" name="str" value="{{ old('str') }}">
        <span style="color:red">@error('str')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="namaVaksinator" class="form-control-label">Nama Vaksinator</label>
        <input class="form-control" type="text" id="namaVaksinator" name="namaVaksinator"  value="{{ old('namaVaksinator') }}">
        <span style="color:red">@error('namaVaksinator')
            {{ $message }}
        @enderror</span>
    </div>
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
        <label for="dosisVaksin" class="form-control-label">Vaksin Dosis ke-</label>
        <select class="form-control" id="dosisVaksin" name="dosisVaksin">
            @if (old('dosisVaksin') == "2")
            <option value="1">1</option>
            <option value="2" selected>2</option>
            @else
            <option value="1" selected>1</option>
            <option value="2">2</option>
            @endif
          </select>
    </div>
    <div class="form-group">
        <label for="tglVaksin" class="form-control-label">Tanggal Vaksin</label>
        <input class="form-control" type="datetime-local" id="tglVaksin" name="tanggalVaksin"  value="{{ old('tanggalVaksin') }}">
        <span style="color:red">@error('tanggalVaksin')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="tempatVaksin" class="form-control-label">Tempat Vaksin</label>
        <input class="form-control" type="text" id="tempatVaksin" name="tempatVaksin" value="{{ old('tempatVaksin') }}">
        <span style="color:red">@error('tempatVaksin')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>
<div class="d-flex justify-content-start">
    <a href="{{ route('vaksin.index') }}">
        <button class="btn btn-icon btn-secondary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
        <span class="btn-inner--text">Kembali</span>
    </button>
    </a>
</div>
@endsection