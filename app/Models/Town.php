<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Town extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
            'name',
    ];

    /**
     *  Get the agencies for the Town
     */
    public function agencies(): HasMany
    {
        return $this->hasMany(Agency::class);
    }
}
