<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClientService extends Pivot
{
    protected $table = 'client_services';
    protected $guarded = [];
}
