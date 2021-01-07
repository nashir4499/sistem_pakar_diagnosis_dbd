<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = "diagnosas";
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = ['kode', 'nama_diagnosa', 'keterangan', 'created_at'];
}
