<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "description",
        "thumbnail"
    ];

    public function gallery():HasMany
    {
        return $this->hasMany(Gallery::class,"fk_gc_id");
    }
}
