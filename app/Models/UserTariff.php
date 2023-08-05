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
        'user_xml_id',
        'tariff_xml_id',
        'date_start',
        'date_end',
        'is_active',
    ];



}
