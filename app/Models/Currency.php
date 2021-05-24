<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Currency
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $slug
 * @property string|null $logo
 * @property string|null $description
 * @property bool $status
 * @property-read mixed $logo_url
 * @property-read mixed $status_text
 * @method static \Illuminate\Database\Eloquent\Builder|Currency findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @mixin \Eloquent
 */
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
