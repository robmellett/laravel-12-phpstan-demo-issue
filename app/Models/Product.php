<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Domain\Product\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @use HasFactory<ProductFactory>
     */
    use HasFactory;

    /**
     * @return array{
     *     status: 'Domain\Product\Enums\ProductStatus',
     * }
     */
    protected function casts()
    {
        return [
            'status' => ProductStatus::class,
        ];
    }
}
