<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "start_date",
        "end_date",
        "location",
        "donor",
        "short_description",
        "description",
        "is_completed",
        "fk_member_id",
        "title"
    ];

    protected $casts=[
        "start_date"=>"timestamp",
        "end_date"=>"timestamp",
    ];

    public function member():BelongsTo
    {
        return $this->belongsTo(Member::class, "fk_member_id");
    }
}
