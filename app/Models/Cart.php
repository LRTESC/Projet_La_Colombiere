<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property number id
 */
class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['_token', '_method'];

    public function user(): HasOne
    {
        return $this
            ->hasOne(User::class);
    }

    public function products(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class)
            ->withPivot('price', 'quantity');
    }
}
