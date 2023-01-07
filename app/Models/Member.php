<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,"fk_user_id");
    }

    public function projects():HasMany
    {
        return $this->hasMany(Project::class, "fk_member_id");
    }
    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class, "fk_role_id");
    }
}
