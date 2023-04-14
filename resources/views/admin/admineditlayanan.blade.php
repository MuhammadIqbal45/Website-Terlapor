@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Edit Layanan
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin Layanan</a></li>
      <li><a>Admin Edit Layanan</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Layanan Telapor</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form action="{{ url('admin-update-layanan', $edt->id) }}" method="post" >

            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Nama Pelapor</label>
                <input name="nama_pelapor" type="text" class="form-control" placeholder="Nama Pelapor" value="{{ $edt -> nama_pelapor }}">
              </div>
              <div class="form-group">
                <label>Tempat</label>
                <input name="tempat" type="text" class="form-control" placeholder="Tempat Kejadian" value="{{ $edt -> tempat }}">
              </div>
              <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input name="tanggal_kejadian" type="date" class="form-control" placeholder="Tanggal Kejadian" value="{{ $edt -> tanggal_kejadian }}">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea name= "deskripsi" type="text" class="form-control" placeholder="Deskripsi">{{ $edt -> deskripsi }}</textarea>
              </div>
              <div class="form-group">
                <label>Upload gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input name="foto" type="file" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile"></label>
                  </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Edit Data</button>
                </div>
              </div>
            </div>
          </form>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
