<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupBoot extends Model
{
    protected $table = 'group_boots';

    protected $fillable = [
        'id',
        'name',
        'price',
        'group_id',
        'description',
        'day_off',
        'photo',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
