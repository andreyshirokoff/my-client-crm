<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $table = 'tariffs';

    protected $fillable = [
        'id',
        'title',
        'price',
        'trial',
        'is_test',
        'is_actual',
        'xml_id'
    ];
}
