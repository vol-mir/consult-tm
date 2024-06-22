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
 * @property string $value
 * @property string|null $description
 * @property int|null $contact_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $is_main
 * @property-read \App\Models\ContactType|null $contactType
 * @method static Builder|Contact newModelQuery()
 * @method static Builder|Contact newQuery()
 * @method static Builder|Contact query()
 * @method static Builder|Contact whereContactTypeId($value)
 * @method static Builder|Contact whereCreatedAt($value)
 * @method static Builder|Contact whereDescription($value)
 * @method static Builder|Contact whereId($value)
 * @method static Builder|Contact whereIsMain($value)
 * @method static Builder|Contact whereName($value)
 * @method static Builder|Contact whereUpdatedAt($value)
 * @method static Builder|Contact whereValue($value)
 * @mixin Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'description',
        'contact_type_id',
        'is_main',
    ];

    public function contactType(): BelongsTo
    {
        return $this->belongsTo(ContactType::class);
    }
}
