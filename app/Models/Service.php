<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'id',
        'group_id',
        'is_med',
        'name',
        'description',
        'contradation',
        'indicators',
        'recommendation',
        'amount'
    ];
}
