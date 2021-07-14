<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bukuModel extends Model
{
    protected $table = 'buku';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','nama_buku','pengarang','deskripsi'
    ];
}
