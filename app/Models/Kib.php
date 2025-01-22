<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Kib extends Model
{
    use HasFactory;

    protected $fillable = [
        'kib_type_id',
        'nama_dokumen',
        'file_path',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($kib) {
            if ($kib->file_path && Storage::disk('public')->exists($kib->file_path)) {
                Storage::disk('public')->delete($kib->file_path);
            }
        });
    }

    public function kibType()
    {
        return $this->belongsTo(KibType::class, 'kib_type_id');
    }

    public function getFileUrlAttribute()
    {
        return $this->file_path ? Storage::disk('public')->url($this->file_path) : null;
    }
}
