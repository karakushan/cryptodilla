<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * App\Models\NewsCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $slug
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
class NewsCategory extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
