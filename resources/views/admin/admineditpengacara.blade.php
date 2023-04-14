@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Admin Edit Pengacara
    </h1>
    <ol class="breadcrumb">
      <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a>Admin Pengacara</a></li>
      <li><a>Admin Edit Pengacara</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Layanan Pengacara</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form action="{{ url('admin-update-pengacara', $edt->id) }}" method="post" >

            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Pengacara</label>
                    <input name="nama_pengacara" type="text" class="form-control" placeholder="Nama Pengacara" value="{{ $edt -> nama_pengacara }}">
                  </div>
                  <div class="form-group">
                    <label>Perusahaan</label>
                    <input name="perusahaan" type="text" class="form-control" placeholder="Perusahaan" value="{{ $edt -> perusahaan }}">
                  </div>
                  <div class="form-group">
                    <label>Kontak</label>
                    <input name="kontak_pengacara" type="text" class="form-control" placeholder="Kontak" value="{{ $edt -> kontak_pengacara }}">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Email" value="{{ $edt -> email }}">
                  </div>
                  <div class="form-group">
                    <label>TTL</label>
                    <input name="ttl" type="text" class="form-control" placeholder="Tempat, Tanggal Lahir" value="{{ $edt -> ttl }}">
                  </div>
                  <div class="form-group">
                    <label>Genre</label>
                    <input name="kelamin" type="text" class="form-control" placeholder="Genre" value="{{ $edt -> kelamin }}">
                  </div>
                  <div class="form-group">
                    <label>Riwayat Pengalaman</label>
                    <input name="riwayatpengalaman" type="text" class="form-control" placeholder="Riwayat Pengalaman" value="{{ $edt -> riwayatpengalaman }}">
                  </div>
                  <div class="form-group">
                    <label>Moto</label>
                    <input name="uraian" type="text" class="form-control" placeholder="Moto" value="{{ $edt -> uraian }}">
                  </div>
                  <div class="form-group">
                    <label>Alamat Pengacara</label>
                    <textarea name= "kota_pengacara" type="text" class="form-control" placeholder="Alamat Pengacara">{{ $edt -> kota_pengacara }}</textarea>
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
