@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Pengacara
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Admin Pengacara</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Layanan Pengacara</h3>

        <div class="box-tools pull-right">
            <a href="{{ url('/admin-tambah-pengacara')}}" type="submit" class="btn btn-success">Tambah</a>
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
                          <th>Nama Pengacara</th>
                          <th>Perusahaan</th>
                          <th>Alamat Pengacara</th>
                          <th>Kontak Pengacara</th>
                          <th>Foto</th>
                          <th>Email</th>
                          <th>TTL</th>
                          <th>Genre</th>
                          <th>Moto</th>
                          <th>Riwayat Pengalaman</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach ($tambahpengacaras as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->nama_pengacara }}</th>
                        <th>{{ $item->perusahaan }}</th>
                        <th>{{ $item->kota_pengacara }}</th>
                        <th>{{ $item->kontak_pengacara }}</th>
                        <th>{{ $item->foto }}</th>
                        <th>{{ $item->email }}</th>
                        <th>{{ $item->ttl }}</th>
                        <th>{{ $item->kelamin}}</th>
                        <th>{{ $item->uraian }}</th>
                        <th>{{ $item->riwayatpengalaman }}</th>
                        <th>
                            <a href ="{{ url('admin-edit-pengacara', $item->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                            <a href ="{{ url('admin-delete-pengacara', $item->id)}}"><i style="color:red" class="fa fa-trash-o" aria-hidden="true"></i>
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
      <div class="box-footer">
        {{-- <div class="box-body"> --}}
            {{ $tambahpengacaras->links() }}
        </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
