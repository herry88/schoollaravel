<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    // protected $guarded =[]; //definisikan table yang di database
    protected $table = 'dosens';
    protected $fillable= ['nidn','nama','nohp','email'];
    protected $primaryKey = 'nidn';
    public $incrementing = false;
}
