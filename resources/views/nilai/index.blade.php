@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Nilai
                    <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO. </th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $lai)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lai->mahasiswa->npm }}</td>
                                <th>{{ $lai->mahasiswa->user->name }}</th>
                                <td>{{ $lai->makul->nama_makul }}</td>
                                <td>{{ $lai->makul->sks }}</td>
                                <td>{{ $lai->nilai }}</td>
                                <td>
                                    <a href="{{ route('edit.nilai', $lai->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus.nilai', $lai->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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
