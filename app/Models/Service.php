<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, ClientService::class);
    }
}
