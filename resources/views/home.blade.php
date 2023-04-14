@extends('layouts.app')

@section('content')
<!-- 
<div>
    <div>
        <div class="card card-solid">
            <div class="card-body pb-0"> -->


<div class="container">
    <div class="row-justify-content-center">
        <h3>Layanan Berita</h3>
        @foreach($beritas as $berita)
        <!-- <section class="content">

            <div class="row"> -->
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive" src="{{ url('images')}}/{{ $berita->foto}}"
                        alt="User profile picture">
                    <h3 class="profile-username text-center">{{ $berita->judul}}</h3>
                    <p class="text-muted text-center">{{ $berita->caption}}</p>
                    <div class="box-body">
                        <a href="{{ url('baca-berita')}}/{{ $berita->id }}"
                            class="btn btn-primary btn-block"><b>Baca</b></a>
                    </div>

                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- </div>

        </section> -->
        @endforeach

    </div>


</div>
<!-- </div>
        </div>
    </div>
</div> -->

@endsection