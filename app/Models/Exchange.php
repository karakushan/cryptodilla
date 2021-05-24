<?php

namespace App\Models;

use App\Traits\Binance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Str;

/**
 * App\Models\Exchange
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $logo
 * @property bool $status
 * @property string|null $description
 * @property string|null $slug
 * @property-read mixed $credentials
 * @property-read mixed $logo_url
 * @property-read mixed $status_text
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Exchange extends Model
{
    use HasFactory;

    protected $table = 'exchanges';

    protected $fillable = [
        'name', 'logo', 'status', 'slug', 'description',
    ];

    protected $appends = [
        'logo_url', 'status_text', 'credentials', 'connected'
    ];

    protected $casts = [
        'status' => 'boolean',
        'connected' => 'boolean',
    ];


    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = $value ? Str::of($value)->slug('-') : Str::of($this->attributes['name'])->slug('-');
    }

    public function getLogoUrlAttribute()
    {
        return !empty($this->attributes['logo']) ? Storage::url($this->attributes['logo']) : '';
    }

    public function getStatusTextAttribute()
    {
        return $this->attributes['status'] ? '<span class="badge badge-pill badge-success">' . __('Вкл.') . '</span>' : '<span class="badge badge-pill badge-danger">' . __('Выкл.') . '</span>';
    }

    public function getCredentialsAttribute()
    {
        $exchange = UserExchange::where(['user_id' => auth()->id(), 'exchange_id' => $this->id])->first();

        return $exchange && isset($exchange->credentials) ? $exchange->credentials : null;
    }

    /**
     * Проверяет подключена ли текущая биржа пользователем
     *
     * @return bool
     */
    public function getConnectedAttribute()
    {
        return UserExchange::where([
            ['user_id', auth()->id()],
            ['exchange_id', $this->id],
        ])->count() ? true : false;
    }
}
