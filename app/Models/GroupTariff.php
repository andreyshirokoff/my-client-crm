<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTariff extends Model
{
    protected $table = 'group_tariff';

    protected $fillable = [
        'id',
        'name',
        'group_id',
        'owner_id',
        'active_to',
        'xml_id',
        'sign_path',
    ];
}
