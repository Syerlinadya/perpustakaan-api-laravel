<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Kelasmodel extends Model
{
    protected $table = 'kelas';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama_kelas','kelompok'
    ];
}
