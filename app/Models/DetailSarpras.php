<?php
// app/Models/DetailSarpras.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSarpras extends Model
{
    use HasFactory;

    protected $fillable = [
        'sarpras_id',
        'jenis_ruang',
        'luas',
        'kondisi',
        'foto',
        'keterangan'
    ];

    protected $casts = [
        'foto' => 'array',
        'luas' => 'float'
    ];

    // Relasi ke model Sarpras
    public function sarpras()
    {
        return $this->belongsTo(Sarpras::class);
    }

    // Accessor untuk mengubah format jenis ruang
    public function getFormattedJenisRuangAttribute()
    {
        return ucwords(str_replace('_', ' ', $this->jenis_ruang));
    }
}