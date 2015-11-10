<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumen_tbl extends Model
{
    protected $fillable=[
        'id',
        'judul',
        'keterangan',
        'nama_file',
        'ukuran_file',
        'babin_id'
    ];
}
