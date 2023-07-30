<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesForm extends Model
{
    protected $table = 'services_forms';

    protected $fillable = [
        'id',
        'service_id',
        'fields',
    ];

    public function serviceId()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
