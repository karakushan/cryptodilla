<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserExchange
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int $exchange_id
 * @property array $credentials
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereCredentials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereExchangeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserExchange whereUserId($value)
 * @mixin \Eloquent
 */
class UserExchange extends Model
{
    use HasFactory;

    protected $table = 'user_exchanges';

    protected $fillable = ['title', 'credentials', 'exchange_id', 'user_id', 'active'];

    protected $casts = [
        'credentials' => 'array',
        'active' => 'boolean',
    ];

    protected $hidden = ['credentials'];

    public function exchange()
    {
        return $this->belongsTo(Exchange::class, 'exchange_id');
    }
}
