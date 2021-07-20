@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                   <form action="{{ route('simpan.nilai') }}" method="post">
                       @csrf
                       <div class="form-group">
                           <div class="form-row">

                               <div class="col-sm-10">
                                   <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                   <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}">{{ $mhs->user->name }}</option>
                                        @endforeach
                                   </select>
                               </div>
                        
                               <div class="col-sm-10">
                                   <label class="col-sm-3 col-form-label">Nama Makul</label>
                                   <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                        @foreach ($makul as $kul)
                                        <option value="{{ $kul->id }}">{{ $kul->nama_makul }}</option>
                                        @endforeach
                                   </select>
                               </div>

                               <div class="col-sm-6">
                                   <label class="col-sm-3 col-form-label">Nilai</label>
                                   <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai" maxlength="8">
                               </div>
                           </div>
                       </div>
                            
                       <div class="form-group">
                           <div class="form-row float-right">
                               <div class="col">
                                   <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                   <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                               </div>
                           </div>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
