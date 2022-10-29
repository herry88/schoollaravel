<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    protected $primaryKey = 'kode_fakultas';
    protected $fillable = ['kode_fakultas','nama_fakultas'];
    public $incrementing = false;
}
