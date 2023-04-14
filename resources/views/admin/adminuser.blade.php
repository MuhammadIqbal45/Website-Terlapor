@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin User
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin User</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Layanan User</h3>

        <div class="box-tools pull-right">
            {{-- <a href="{{ url('/admin-tambah-user')}}" type="submit" class="btn btn-success">Tambah</a> --}}
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                    </tr>
                    @foreach ($tambahusers as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->email }}</th>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
      <div class="box-footer">
        {{-- <div class="box-body"> --}}
            {{ $tambahusers->links() }}
        </div>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
