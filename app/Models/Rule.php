<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $table = "rules";
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    protected $fillable = ['id', 'rule', 'created_at'];
}
