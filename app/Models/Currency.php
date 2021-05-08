<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Currency extends Model
{
    use HasFactory,Sluggable;

    protected $fillable=['name', 'slug', 'logo', 'description', 'status'];

    protected $appends = [
        'logo_url', 'status_text'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getLogoUrlAttribute()
    {
        return !empty($this->attributes['logo']) ? Storage::url($this->attributes['logo']) : '';
    }

    public function getStatusTextAttribute()
    {
        return $this->attributes['status'] ? '<span class="badge badge-pill badge-success">' . __('Вкл.') . '</span>' : '<span class="badge badge-pill badge-danger">' . __('Выкл.') . '</span>';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
