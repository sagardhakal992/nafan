<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    const SUPERADMIN = "superadmin";
    const STAFF = "staff";

    protected $fillable = [
        "name",
        "slug"
    ];

    public static function boot(){
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
        parent::boot();
    }

    public function members():HasMany
    {
        return $this->hasMany(Member::class, "fk_member_id");
    }
}
