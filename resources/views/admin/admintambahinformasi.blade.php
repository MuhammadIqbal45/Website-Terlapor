@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Tambah Informasi
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin Informasi</a></li>
      <li><a>Admin Tambah Informasi</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Layanan Informasi</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form method="post" action="{{ url('/admin-simpan-informasi')}}">{{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Judul</label>
                <input name="judul" type="text" class="form-control" placeholder="Judul">
              </div>
              <div class="form-group">
                <label>Uraian</label>
                <textarea name= "uraian" type="text" class="form-control" placeholder="Uraian"></textarea>
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
                    <button type="submit" class="btn btn-success">Tambah</button>
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
