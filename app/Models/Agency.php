<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     *  Get the town that owns the Agency
     */
    public function town(): BelongsTo
    {
        return $this->belongsTo(Town::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function contributions(): HasMany
    {
        return $this->hasMany(Contribution::class);
    }

}
