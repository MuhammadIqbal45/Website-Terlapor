@extends('layouts.app')

@section('content')
<section class="content">
      <div class="container">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Baca Informasi</h3>
              <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span>
            </div>
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
             
                  <div class= "mailbox-controls with-border text-center"> 
                        <h3>{{ $informasi->judul}}</h3>  
                  </div>
              </div>
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                    <div class="col-md-6">
                        <img src="{{ url('images')}}/{{ $informasi->foto}}" width="500">
                    </div>
                </div>
              </div>
              <div class="mailbox-read-message">
              <p>{{ $informasi->uraian}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('images')}}/{{ $informasi->foto}}" width="400" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4><strong>{{ $informasi->judul}}</strong></h4>
                            {{-- <h6 class="card-text">{{ $berita->caption}}</h6> --}}
                            <h6 class="card-text">{{ $informasi->uraian}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
