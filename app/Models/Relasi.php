<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;
    protected $table = "relasis";
    protected $fillable = ['id', 'diagnosas_id', 'gejalas_id', 'cf'];

    public function diagnosa()
    {
        return $this->belongsTo('App\Models\Diagnosa', 'diagnosas_id', 'kode');
    }
    public function gejala()
    {
        return $this->belongsTo('App\Models\Gejala', 'gejalas_id', 'kode');
    }
}
