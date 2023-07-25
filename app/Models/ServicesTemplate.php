<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesTemplate extends Model
{
    protected $table = 'services_templates';

    protected $fillable = [
        'id',
        'is_med',
        'name',
        'description',
        'contradation',
        'indicators',
        'recommendation',
        'amount'
    ];
}
