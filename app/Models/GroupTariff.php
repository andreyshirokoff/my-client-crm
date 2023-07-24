<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTariff extends Model
{
    protected $table = 'group_tariffs';

    protected $casts = [
        'active_to' => 'date'
    ];
    protected $fillable = [
        'id',
        'name',
        'group_id',
        'owner_id',
        'active_to',
        'xml_id',
        'sign_path',
    ];

    public function getOwner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function getGroup()
    {
        return $this->belongsTo(UserGroup::class, 'group_id', 'id');
    }
}
