<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

/**
 * App\Models\UserActivity
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property string|null $ip
 * @property mixed|null $location
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereUserId($value)
 * @property string|null $data
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity whereData($value)
 */
class UserActivity extends Model
{
    use HasFactory;

    protected $casts = ['location' => 'array'];

    protected $fillable=['name','description','ip','location','user_id','data'];

    public function getCreatedAtAttribute($value)
    {
        return (new Date($value))->format(config('app.time_format'));
    }
}
