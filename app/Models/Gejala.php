<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = "gejalas";
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = ['kode', 'nama_gejala', 'keterangan', 'created_at'];
}
