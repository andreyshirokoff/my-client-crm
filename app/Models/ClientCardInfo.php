<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientCardInfo extends Model
{
    protected $table = 'client_card_infos';

    protected $fillable = [
        'id',
        'group_id',
        'client_id',
        'fields',
    ];
}
