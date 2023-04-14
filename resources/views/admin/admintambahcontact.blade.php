@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Tambah Kritik dan Saran
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin Kritik dan Saran</a></li>
      <li><a>Admin Tambah Kritik dan Saran</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Layanan Kritik dan Saran</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form method="post" action="{{ url('/admin-simpan-contact')}}">{{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Judul</label>
                <input name="judul" type="text" class="form-control" placeholder="judul">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input name="nama" type="text" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Uraian</label>
                <textarea name= "uraian" type="text" class="form-control" placeholder="Uraian"></textarea>
              </div>
              <div class="form-group">
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
