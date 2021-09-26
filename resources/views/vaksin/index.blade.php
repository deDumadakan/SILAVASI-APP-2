@extends('partials.template')

@section('container')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('status') }}</strong>
    </div>
@endif

<div class="m-3 d-flex justify-content-end">
    <a href="{{ url('vaksin/create') }}">
    <button class="btn btn-icon btn-primary btn-sm" type="button">
        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
    </button>
    </a>
</div>
<div class="table-responsive">
    <div>
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="id">ID</th>
                    <th scope="col" class="sort" data-sort="nik">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">STR</th>
                    <th scope="col">Nama Vaksinator</th>
                    <th scope="col">Jenis Vaksin</th>
                    <th scope="col">Dosis Vaksin</th>
                    <th scope="col">Tanggal Vaksin</th>
                    <th scope="col">Tempat Vaksin</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($vaksins as $vaksin)
                <tr>
                    <td>{{ $vaksin->id }}</td>
                    <td>{{ $vaksin->nik }}</td>
                    <td>{{ $vaksin->nama }}</td>
                    <td>{{ $vaksin->str }}</td>
                    <td>{{ $vaksin->namaVaksinator }}</td>
                    <td>{{ $vaksin->jenisVaksin }}</td>
                    <td>{{ $vaksin->dosisVaksin }}</td>
                    <td>{{ $vaksin->tanggalVaksin }}</td>
                    <td>{{ $vaksin->tempatVaksin }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </div>
@endsection