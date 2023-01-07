<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "short_description",
        "description",
        "fk_member_id",
        "is_public"
    ];

    public function member():BelongsTo
    {
        return $this->belongsTo(Member::class, "fk_member_id");
    }
}
