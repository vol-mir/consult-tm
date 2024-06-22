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
 * App\Models\Lead
 *
 * @property int $id
 * @property string|null $email
 * @property bool|null $is_processed
 * @property bool|null $is_message_sent
 * @property string|null $phone
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $message
 * @property int|null $lead_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\LeadType|null $leadType
 * @method static Builder|Lead newModelQuery()
 * @method static Builder|Lead newQuery()
 * @method static Builder|Lead query()
 * @method static Builder|Lead whereCreatedAt($value)
 * @method static Builder|Lead whereEmail($value)
 * @method static Builder|Lead whereFirstName($value)
 * @method static Builder|Lead whereId($value)
 * @method static Builder|Lead whereIsMessageSent($value)
 * @method static Builder|Lead whereIsProcessed($value)
 * @method static Builder|Lead whereLastName($value)
 * @method static Builder|Lead whereLeadTypeId($value)
 * @method static Builder|Lead whereMessage($value)
 * @method static Builder|Lead wherePhone($value)
 * @method static Builder|Lead whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'lead_type_id',
        'is_processed',
        'is_message_sent',
        'phone',
        'first_name',
        'last_name',
        'message',
        'updated_at',
    ];

    public function leadType(): BelongsTo
    {
        return $this->belongsTo(LeadType::class);
    }
}
