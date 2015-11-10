<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten_tbl extends Model
{
    protected $fillable=[
        'id',
        'nama',
        'provinsi_id'
    ];
}
