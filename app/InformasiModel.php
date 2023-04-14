<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiModel extends Model
{
    protected $table = 'informasi';
    protected $primaryKey = 'id';
    protected $fillable = ['id','judul', 'uraian', 'foto'];
}
