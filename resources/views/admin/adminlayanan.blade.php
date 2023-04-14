@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Layanan
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Admin Layanan</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Layanan</h3>

        <div class="box-tools pull-right">
            {{-- <a href="{{ url('/admin-tambah-layanan')}}" type="submit" class="btn btn-success">Tambah</a> --}}
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
                      <th>Nama Pelapor</th>
                      <th>Tempat</th>
                      <th>Foto</th>
                      <th>Tanggal Kejadian</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach ($tambahlayanans as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->nama_pelapor }}</th>
                        <th>{{ $item->tempat }}</th>
                        <th>{{ $item->foto }}</th>
                        <th>{{ $item->tanggal_kejadian }}</th>
                        <th>{{ $item->deskripsi }}</th>
                        <th>
                            <a href ="{{ url('admin-edit-layanan', $item->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                            <a href ="{{ url('admin-delete-layanan', $item->id)}}"><i style="color:red" class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->

              <!-- /.box -->
            </div>
          </div>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
      <div class="box-footer">
        {{-- <div class="box-body"> --}}
            {{ $tambahlayanans->links() }}
        </div>
      </div>
  </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
