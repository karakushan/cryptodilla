<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BotSetting
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $bot
 * @property string $name
 * @property string|null $description
 * @property mixed|null $settings
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereBot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BotSetting whereUserId($value)
 * @mixin \Eloquent
 */
class BotSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'bot',
        'name',
        'description',
        'settings',
        'user_id'
    ];

    protected $casts=[
        'settings'=>'array'
    ];
}
