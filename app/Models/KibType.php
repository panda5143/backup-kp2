<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class KibType extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($kibType) {
            // Delete associated image if exists
            if ($kibType->gambar && Storage::disk('public')->exists($kibType->gambar)) {
                Storage::disk('public')->delete($kibType->gambar);
            }

            // Delete associated KIB files and records
            $kibType->detailKibs->each(function ($kib) {
                if ($kib->file_path && Storage::disk('public')->exists($kib->file_path)) {
                    Storage::disk('public')->delete($kib->file_path);
                }
                $kib->delete();
            });
        });
    }

    /**
     * Get the KIBs associated with this type.
     */
    public function detailKibs(): HasMany
    {
        return $this->hasMany(Kib::class, 'kib_type_id');
    }

    /**
     * Get the full URL for the type's image.
     */
    public function getImageUrlAttribute(): ?string
    {
        return $this->gambar 
            ? Storage::disk('public')->url($this->gambar)
            : null;
    }

    /**
     * Delete the model's image from storage.
     */
    public function deleteImage(): void
    {
        if ($this->gambar && Storage::disk('public')->exists($this->gambar)) {
            Storage::disk('public')->delete($this->gambar);
            $this->update(['gambar' => null]);
        }
    }
}