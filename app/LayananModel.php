<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_pelapor', 'tempat', 'foto',
    'deskripsi', 'tanggal_kejadian'];
}
