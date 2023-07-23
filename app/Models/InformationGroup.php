<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationGroup extends Model
{
    protected $table = 'information_groups';

    protected $fillable = [
        'id',
        'group_id',
        'type',
        'user_id',
        'text',
        'is_archive',
    ];
}
