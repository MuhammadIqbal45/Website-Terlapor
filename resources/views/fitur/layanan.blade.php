@extends('layouts.app')

@section('content')

<div>
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="container">
                        <h3>Layanan Laporan</h3>
                            <div class="col-md-4">
                                <form method="post" action="{{ url('/layanan-web')}}">{{ csrf_field() }}
                                
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label>Nama Pelapor</label>
                                        <input name="nama_pelapor" type="text" class="form-control" placeholder="Nama Pelapor">
                                      </div>
                                      <div class="form-group">
                                        <label>Tempat Kejadian</label>
                                        <input name="tempat" type="text" class="form-control" placeholder="Tempat Kejadian">
                                      </div>
                                      <div class="form-group">
                                        <label>Tanggal Kejadian</label>
                                        <input name="tanggal_kejadian" type="date" class="form-control" placeholder="Tanggal Kejadian">
                                      </div>
                                      <div class="form-group">
                                        <label>Deskripsi Kejadian</label>
                                        <textarea name= "deskripsi" type="text" class="form-control" placeholder="Deskripsi Kejadian"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label>Bukti Kejadian</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input name="foto" type="file" class="custom-file-input">
                                          </div>
                                        </div>
                                      </div>
                                      <div class= "form-group">
                                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Data yang Anda masukkan sudah benar?');">Submit</button>
                                        </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
