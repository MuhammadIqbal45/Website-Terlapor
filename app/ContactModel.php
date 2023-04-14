<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = ['id','judul', 'uraian', 'email', 'nama'];
}
