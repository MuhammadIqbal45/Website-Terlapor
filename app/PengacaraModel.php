<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengacaraModel extends Model
{
    protected $table = 'pengacara';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_pengacara',
    'kontak_pengacara', 'kota_pengacara', 'foto',
    'uraian', 'ttl', 'kelamin', 'riwayatpengalaman',
    'perusahaan', 'email'];
}
