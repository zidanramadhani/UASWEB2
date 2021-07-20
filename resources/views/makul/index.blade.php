@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Makul
                    <a href="{{ route('tambah.makul') }}" class="btn btn-md btn-primary float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No. </th>
                                <th>KODE MAKUL</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td>{{ $mk->kd_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>
                                    <a href="{{ route('edit.makul', $mk->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
