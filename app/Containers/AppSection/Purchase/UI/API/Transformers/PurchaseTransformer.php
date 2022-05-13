<?php

namespace App\Containers\AppSection\Purchase\UI\API\Transformers;

use App\Containers\AppSection\Purchase\Models\Purchase;
use App\Ship\Parents\Transformers\Transformer;

class PurchaseTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected array $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected array $availableIncludes = [

    ];

    public function transform(Purchase $purchase): array
    {
        $response = [
            'object' => $purchase->getResourceKey(),
            'id' => $purchase->getHashedKey(),
            'supplier' => $purchase->supplier,
            'description' => $purchase->description,
            'total_unit' => $purchase->total_unit,
            'status' => $purchase->status,
            'total' => $purchase->total,
            'created_at' => $purchase->created_at,
            'updated_at' => $purchase->updated_at,
            'readable_created_at' => $purchase->created_at->diffForHumans(),
            'readable_updated_at' => $purchase->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $purchase->id,
            // 'deleted_at' => $purchase->deleted_at,
        ], $response);
    }
}
