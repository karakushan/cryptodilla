<?php

namespace App\Models;

use App\Traits\Binance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Str;

class Exchange extends Model
{
    use HasFactory;

    protected $table = 'exchanges';

    protected $fillable = [
        'name', 'logo', 'status', 'slug', 'description',
    ];

    protected $appends = [
        'logo_url', 'status_text', 'credentials'
    ];

    protected $casts = [
        'status' => 'boolean',
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
}
