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

//    public static function userGroups()
//    {
//        $groups = [];
//        $groupObject = UserGroup::all();
//        foreach($groupObject as $item)
//        {
//            $groups[$item->id] = $item->name;
//        }
//
//        return $groups;
//    }

    public function groupId()
    {
        return $this->belongsTo(UserGroup::class, 'group_id');
    }
}
