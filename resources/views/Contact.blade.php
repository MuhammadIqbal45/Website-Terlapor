@extends('layouts.app')

@section('content')

<!-- <div>
    <div class="row">
        <div class="col-md-12 mt-2">
            <div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('images/7.png') }}">
                </div>
            </div>
        </div>
    </div>
</div> -->
<div>
    <div>
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="container">
                </div>
                <div class="find-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h3>Lokasi Kami Pada Map</h3>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8112895.063223581!2d105.27995576940397!3d-6.845624239132428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f151b2877389%3A0x8875c0838820a822!2sPolda%20Metro%20Jaya!5e0!3m2!1sen!2sid!4v1642994216786!5m2!1sen!2sid" 
                                    width="1150" 
                                    height="450" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="send-message">
                    <div class="container">
                    <div class="col-md-6">
                                <div class="right-content">
                                    <h3>Tentang Kami</h3>
                                    <p>Perusahaan Kami menyediakan layanan kepada Masyarakat agar memudahkan Masyarakat
                                        dalam mengatasi permasalahan yang terjadi.<br><br>Pengguna dapat memanfaatkan fitur-fitur yang telah Kami sediakan. Jika terdapat
                                        sesuatu yang membuat Anda tidak senang, Anda dapat menuliskan Kritik dan Saran pada fitur
                                        yang tersedia.
                                    </p>
                                    <p>Terimakasih atas Kritik dan Saran yang Anda berikan.
                                        Pesan Anda akan menjadi masukkan untuk Kami agar menjadi lebih baik
                                    </p>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-5 mt-10">
                                <div class="section-heading">
                                    
                                </div>
                                <div class="row justify-content-left">
                                <h3>Tulis Kritik dan Saran</h3>
                                    <div class="col-7 mt-3">
                                        <form method="post" action="{{ url('contact-us')}}">{{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="inputName">Nama</label>
                                                <input name="nama" type="text" id="inputName" class="form-control" />
                                              </div>
                                              <div class="form-group">
                                                <label for="inputEmail">E-Mail</label>
                                                <input name="email" type="email" id="inputEmail" class="form-control" />
                                              </div>
                                              <div class="form-group">
                                                <label for="inputSubject">Judul</label>
                                                <input name="judul" type="text" id="inputSubject" class="form-control" />
                                              </div>
                                              <div class="form-group">
                                                <label for="inputMessage">Kritik dan Saran</label>
                                                <textarea name="uraian" id="inputMessage" class="form-control" rows="4"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda yakin dengan kritik dan saran Anda?');">submit</button>
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
    </div>
</div>

<!-- <div class="row justify-content-center">
    <div class="col-md-7 mt-2">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row justify-content-center">
                            <footer class="main-footer">
                                <div class="pull-right hidden-xs">
                                    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Mahasiswa Informatika UISI</a>.</strong> All rights
                                    reserved.
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div> -->
@endsection
