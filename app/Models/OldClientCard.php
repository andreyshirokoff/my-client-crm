<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldClientCard extends Model
{
    protected $table = 'old_client_cards';

    protected $fillable = [
        'id',
        'name',
        'path',
        'client_id',
        'created_at'
    ];
}
