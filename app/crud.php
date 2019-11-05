<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama',
    ];
}
