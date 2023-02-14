<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agency extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Tu dois toujours ajouter des fillabes
    protected $fillable = [
            'name',
            'email',
            'agency_manager_name',
            'mobile',
            'town_id',
        ];

    /**
     *  Get the town that owns the Agency
     */
    public function town(): BelongsTo
    {
        return $this->belongsTo(Town::class);
    }

    /**
     *  Get the user that owns the Agency
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
