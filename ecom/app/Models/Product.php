<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use InvalidArgumentException;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * @return HasOne<Image, Product>
     *
     * @throws InvalidArgumentException
     */
    public function image()
    {
        return $this->hasOne(Image::class)->ofMany('featured', 'max');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
