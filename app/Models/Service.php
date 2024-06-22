<?php

declare(strict_types=1);

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string|null $sku
 * @property string|null $description
 * @property bool $is_visible
 * @property bool|null $is_popular
 * @property int|null $rating
 * @property string|null $published_at
 * @property int|null $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $price
 * @property string|null $presentation
 * @property-read \App\Models\Category|null $category
 * @method static Builder|Service newModelQuery()
 * @method static Builder|Service newQuery()
 * @method static Builder|Service query()
 * @method static Builder|Service whereCategoryId($value)
 * @method static Builder|Service whereCreatedAt($value)
 * @method static Builder|Service whereDescription($value)
 * @method static Builder|Service whereId($value)
 * @method static Builder|Service whereIsPopular($value)
 * @method static Builder|Service whereIsVisible($value)
 * @method static Builder|Service whereName($value)
 * @method static Builder|Service wherePresentation($value)
 * @method static Builder|Service wherePrice($value)
 * @method static Builder|Service wherePublishedAt($value)
 * @method static Builder|Service whereRating($value)
 * @method static Builder|Service whereSku($value)
 * @method static Builder|Service whereSlug($value)
 * @method static Builder|Service whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'sku',
        'description',
        'is_visible',
        'is_popular',
        'rating',
        'published_at',
        'category_id',
        'price',
        'presentation',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
