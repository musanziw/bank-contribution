<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agency extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     *  Get the town that owns the Agency
     */
    public function town(): belongsTo
    {
        return $this->belongsTo(Town::class);
    }

    /**
     *  Get the user that owns the Agency
     */
    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

}
