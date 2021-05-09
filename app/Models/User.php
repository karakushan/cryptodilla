<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'country',
        'city',
        'address',
        'ip',
        'phone',
        'terminal_theme',
        'terminal_currency',
        'last_login_date',
        'last_location'
    ];

    protected $appends = ['avatar_url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'google2fa_status' => 'boolean'
    ];

//    public function setPhoneAttribute($value)
//    {
//        $this->attributes['phone'] = preg_replace("/[^0-9]/", '', $value);
//    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getAvatarUrlAttribute()
    {
        return $this->attributes['avatar'] ? Storage::url($this->attributes['avatar']) : null;
    }
}
