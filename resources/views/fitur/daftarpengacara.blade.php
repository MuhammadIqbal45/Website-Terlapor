@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('images')}}/{{ $pengacara->foto}}" width="400" alt="">
                        </div>
                        <div class="col-md-5">
                            <h2><strong>{{ $pengacara->nama_pengacara}}</strong></h2>
                            <h4 class="card-text">{{ $pengacara->perusahaan}}</h4>
                            <h4 class="card-text"><strong>Tempat, Tanggal Lahir : </strong>{{ $pengacara->ttl}}</h4>
                            <h4 class="card-text"><strong>Alamat Perusahaan     : </strong>{{ $pengacara->kota_pengacara}}</h4>
                            <h4 class="card-text"><strong>Jenis Kelamin         : </strong>{{ $pengacara->kelamin}}</h4>
                            <h4 class="card-text"><strong>Riwayat Pengalaman    : </strong>{{ $pengacara->riwayatpengalaman}}</h4>
                            <h4 class="card-text"><strong>Kontak                : </strong>{{ $pengacara->kontak_pengacara}}</h4>
                            <h4 class="card-text"><strong>Email                 : </strong>{{ $pengacara->email}}</h4>
                            <h4 class="card-text"><strong>Moto                  : </strong>{{ $pengacara->uraian}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row justify-content-center">
    <div class="col-md-7 mt-2">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row justify-content-center">
                            <footer class="main-footer">
                                <div class="pull-right hidden-xs">
                                    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Mahasiswa Informatika UISI</a>.</strong> All rights
                                    reserved.
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div> -->
@endsection
