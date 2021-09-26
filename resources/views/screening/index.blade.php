@extends('partials.template')

@section('container')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('status') }}</strong>
    </div>
@endif
<div class="m-3 d-flex justify-content-end">
    <a href="{{ url('screening/create') }}">
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
                    <th scope="col" class="sort" data-sort="petugas">Petugas</th>
                    <th scope="col" class="sort" data-sort="nik">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($screenings as $screening)
                <tr>
                    <td>{{ $screening->id }}</td>
                    <td>{{ $screening->petugas_id }}</td>
                    <td>{{ $screening->nik }}</td>
                    <td>{{ $screening->nama }}</td>
                    <td>
                        <a href="{{ url('screening/'.$screening->id)}}">
                            <button class="btn btn-icon btn-success" type="button">
                                <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                <span class="btn-inner--text">Detail</span>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </div>
@endsection