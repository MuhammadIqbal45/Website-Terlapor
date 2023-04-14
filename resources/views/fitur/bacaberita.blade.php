@extends('layouts.app')

@section('content')

<section class="content">
  <div class="container">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Baca Berita</h3>
          <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span>
        </div>
        <div class="box-body no-padding">
          <div class="mailbox-read-info">

            <div class="mailbox-controls with-border text-center">
              <h3>{{ $berita->judul}}</h3>
            </div>
          </div>
          <div class="mailbox-controls with-border text-center">
            <div class="btn-group">
              <div class="col-md-6">
                <img src="{{ url('images')}}/{{ $berita->foto}}" width="500">
              </div>
            </div>
          </div>
          <div class="mailbox-read-message">
            <p>{{ $berita->uraian}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection