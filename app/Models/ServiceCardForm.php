<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCardForm extends Model
{
    protected $table = 'service_card_forms';

    protected $fillable = [
        'id',
        'group_id',
        'fields',
        'is_active',
    ];
}
