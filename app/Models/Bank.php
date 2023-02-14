<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function subscriptions(): hasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
