@extends('layouts.app')

@section('content')

<!-- <div>
    <div>
        <div class="card card-solid">
            <div class="card-body pb-0"> -->
<div class="container">
    <div class="row-justify-content-center">
        <h3>Layanan Informasi</h3>
        @foreach($informasis as $informasi)
        <!-- <section class="content"> -->

        <!-- <div class="row"> -->
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive" src="{{ url('images')}}/{{ $informasi->foto}}"
                            alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $informasi->judul}}</h3>
                        <!-- <p class="text-muted text-center">{{ $informasi->uraian}}</p> -->
                        <div class="box-body">
                            <a href="{{ url('baca-informasi')}}/{{ $informasi->id }}"
                                class="btn btn-primary btn-block"><b>Baca</b></a>
                        </div>

                        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        <!-- </div> -->

        <!-- </section> -->
        @endforeach

    </div>


</div>
<!-- </div>
        </div>
    </div>
</div> -->

<!-- <div class="carousel-item active">
    <img class="d-block w-100" src="{{ url('images/7.png') }}">
</div> -->
<!-- <div>
    <div>
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-md-8 mt-2">
                            <h3>Layanan Informasi</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($informasis as $informasi)
                            <div class="col-md-2 mt-3">
                                <div class="card">
                                    <img src="{{ url('images')}}/{{ $informasi->foto}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h6 class="card-title"><strong>{{ $informasi->judul}}</strong></h6>
                                      {{-- <h6 class="card-text">{{ $berita->caption}}</h6> --}}
                                      <a href="{{ url('baca-informasi')}}/{{ $informasi->id }}" class="btn btn-primary">Baca</a>
                                    </div>
                                  </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

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