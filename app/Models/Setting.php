<?php

declare(strict_types=1);

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $bank_details
 * @property string|null $registration_number
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $address
 * @property string|null $map
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereAddress($value)
 * @method static Builder|Setting whereBankDetails($value)
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereDescription($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereMap($value)
 * @method static Builder|Setting whereRegistrationNumber($value)
 * @method static Builder|Setting whereSlug($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'bank_details',
        'registration_number',
        'description',
        'address',
        'map',
    ];
}
