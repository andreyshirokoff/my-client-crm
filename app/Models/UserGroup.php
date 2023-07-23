<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'user_groups';

    protected $fillable = [
        'id',
        'name',
        'logo_path',
        'sms_count',
        'emails_count',
        'users_count',
        'show_phone',
        'can_edit_card',
        'can_edit_control',
        'non_medical',
        'medical',
        'note_user',
    ];
}
