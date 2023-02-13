<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'agency_manager_name',
        'mobile',
        'bank_id',
        'town_id'
    ];

    public function bank(): belongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function town(): belongsTo
    {
        return $this->belongsTo(Town::class);
    }

    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

}
