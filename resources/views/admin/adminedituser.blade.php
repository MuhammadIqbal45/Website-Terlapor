@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Edit User
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin User</a></li>
      <li><a>Admin Edit User</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Layanan User</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form action="{{ url('admin-update-user', $edt->id) }}" method="post" >

            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                <label>Nama</label>
                <input name="name" type="text" class="form-control" placeholder="Nama" value="{{ $edt -> name }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control" placeholder="Email" value="{{ $edt -> email }}">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password" value="{{ $edt -> password }}">
              </div>
              <div class="form-group">
                <label>No Hp</label>
                <input name="nohp" type="text" class="form-control" placeholder="No Hp" value="{{ $edt -> nohp }}">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name= "alamat" type="text" class="form-control" placeholder="Alamat">{{ $edt -> alamat }}</textarea>
              </div>
              <div class="form-group">
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
