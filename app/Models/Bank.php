<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Bank extends Authenticatable
{
    use HasFactory;

    protected string $guard = 'bank';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'mobile',
        'address',
        'representative_name',
        'password',
        'remember_token',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agencies(): hasMany
    {
        return $this->hasMany(Agency::class);
    }

    public function subscriptions(): hasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
