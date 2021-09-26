@extends('partials.template')

@section('container')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('status') }}</strong>
    </div>
@endif

<div class="m-3 d-flex justify-content-end">
    <a href="{{ url('dataVaksin/create') }}">
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
                    <th scope="col">Jenis Vaksin</th>
                    <th scope="col">Tanggal Distribusi</th>
                    <th scope="col">Nama Distributor</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($dataVaksins as $datavaksin)
                <tr>
                    <td>{{ $datavaksin->id }}</td>
                    <td>{{ $datavaksin->jenisVaksin }}</td>
                    <td>{{ $datavaksin->tglDistribusi }}</td>
                    <td>{{ $datavaksin->namaDistributor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </div>
@endsection