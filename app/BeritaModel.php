<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = ['id','judul', 'caption','uraian', 'foto'];
}
