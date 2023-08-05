<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTariff extends Model
{
    protected $table = 'user_tariffs';

    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];

    protected $fillable = [
        'id',
        'xml_id',
        'user_id',
        'tariff_id',
        'date_start',
        'date_end',
        'is_active',
    ];



}
