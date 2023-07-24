<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'last_name',
        'fullname',
        'avatar',
        'email',
        'password',
        'email_verified_at',
        'phone',
        'is_phone_confirm',
        'theme_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone' => 'string'
    ];

    protected $table = 'users';

    public static function getRequisites()
    {
        $user = Auth::user();
        $userRequisite = UserRequisite::where('user_id', $user->id)->first();
        return $userRequisite;
    }

    public static function getPhone()
    {
        $user = Auth::user();
        $phone = preg_replace('/[^0-9+]/', '', $user->phone);
        $phone = str_replace(['+', ' ', '-'], '+', $phone);
        $phone = '+' . substr($phone, 1, 3) . ' ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9);

        return $phone;
    }


    public function getUserGroup()
    {
        return $this->belongsTo(UserGroup::class, 'group_id', 'id');
    }

}
