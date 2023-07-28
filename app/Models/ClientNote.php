<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientNote extends Model
{
    protected $table = 'client_notes';

    protected $fillable = [
        'id',
        'client_id',
        'service_id',
        'note'
    ];
}
