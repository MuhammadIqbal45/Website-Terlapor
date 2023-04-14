@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Kritik dan Saran
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Admin Kritik dan Saran</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Kritik dan Saran</h3>

        <div class="box-tools pull-right">
            {{-- <a href="{{ url('/admin-tambah-contact')}}" type="submit" class="btn btn-success">Tambah</a> --}}
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
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
                          <th>Judul</th>
                          <th>Uraian</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach ($tambahcontacts as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->nama }}</th>
                        <th>{{ $item->email }}</th>
                        <th>{{ $item->judul }}</th>
                        <th>{{ $item->uraian }}</th>
                        <th>
                            <a href ="{{ url('admin-edit-contact', $item->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                            <a href ="{{ url('admin-delete-contact', $item->id)}}"><i style="color:red" class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </th>
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
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
      <div class="box-footer">
        {{-- <div class="box-body"> --}}
            {{ $tambahcontacts->links() }}
        </div>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
