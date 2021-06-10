<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\News
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string|null $content
 * @property int|null $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $thumbnail
 * @property-read \App\Models\NewsCategory|null $category
 * @property-read mixed $thumbnail_url
 * @method static \Illuminate\Database\Eloquent\Builder|News whereThumbnail($value)
 * @property-read array $translations
 */
class News extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'content', 'category_id', 'thumbnail'];

    public $translatable = ['title', 'content'];

    protected $appends = [
        'thumbnail_url'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Date::parse($value)->format(config('app.time_format'));
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail)
            return \Storage::url($this->thumbnail);
    }

    public function previous()
    {
        return $this->find(--$this->id);
    }

    public function next()
    {
        return $this->find(++$this->id);
    }
}
