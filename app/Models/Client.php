<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'id',
        'group_id',
        'firstname',
        'lastname',
        'fullname',
        'email',
        'phone',
        'avatar',
        'description'
    ];
}
