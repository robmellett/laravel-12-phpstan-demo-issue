<?php

declare(strict_types=1);

use App\Models\Product;

class PerformAction
{
    public function __construct(
        public Product $product
    ) {}

    public function handle(): void
    {
        $this->product->name = 'The One';

        // this produces an error in phpstan = which is correct and helpful
        $result = $this->product->status = 'Not a Value';

        // $result = $this->product->status = ProductStatus::Active;

        dump($result);
    }
}
