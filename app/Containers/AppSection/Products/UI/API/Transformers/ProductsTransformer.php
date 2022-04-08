<?php

namespace App\Containers\AppSection\Products\UI\API\Transformers;

use App\Containers\AppSection\Products\Models\Products;
use App\Ship\Parents\Transformers\Transformer;

class ProductsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Products $products): array
    {
        $response = [
            'object' => $products->getResourceKey(),
            'id' => $products->getHashedKey(),
            'created_at' => $products->created_at,
            'updated_at' => $products->updated_at,
            'readable_created_at' => $products->created_at->diffForHumans(),
            'readable_updated_at' => $products->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $products->id,
            // 'deleted_at' => $products->deleted_at,
        ], $response);
    }
}
