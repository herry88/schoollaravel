<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table= 'jurusans';
    protected $primaryKey = 'kode_jurusan';
    protected $fillable = ['kode_jurusan','nama_jurusan','kode_fakultas','jenjang'];
    public $incrementing = false;

    //relasi fakultas
    /**
     * Get the fakultas that owns the Jurusan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'kode_fakultas');
    }
}
