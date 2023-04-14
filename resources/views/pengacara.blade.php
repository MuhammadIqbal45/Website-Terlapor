@extends('layouts.app')

@section('content')

<!-- <div>
    <div>
        <div class="card card-solid">
            <div class="card-body pb-0"> -->
<div class="container">
    <div class="row-justify-content-center">
        <h3>Daftar Pengacara</h3>
        @foreach($pengacaras as $pengacara)
        <!-- <section class="content">

        <div class="row"> -->
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{ url('images')}}/{{ $pengacara->foto}}" alt="User profile picture">

                    <h3 class="profile-username text-center">{{ $pengacara->nama_pengacara}}</h3>

                    <p class="text-muted text-center">{{ $pengacara->perusahaan}}</p>

                    <div class="box-body">
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                        <p class="text-muted">{{ $pengacara->kota_pengacara}}</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Kontak</strong>

                        <p>
                        <p>No : {{ $pengacara->kontak_pengacara}}</p>
                        </p>
                        <p>
                        <p>Email : {{ $pengacara->email}}</p>
                        </p>
                        <p>
                        <p>Moto : {{ $pengacara->uraian}}</p>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Pengalaman</strong>

                        <p>{{ $pengacara->riwayatpengalaman}}</p>
                    </div>

                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- </section> -->
        @endforeach

    </div>


</div>
<!-- </div>
        </div>
    </div>
</div> -->


@endsection