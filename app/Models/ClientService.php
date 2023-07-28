<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    protected $table = 'client_services';

    protected $fillable = [
        'id',
        'name',
        'client_id',
        'service_id',
        'note_id',
        'created_at',
    ];
}
