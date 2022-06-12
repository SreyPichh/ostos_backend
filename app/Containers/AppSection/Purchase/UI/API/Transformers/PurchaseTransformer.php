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
            'supplier_invoice_number' => $purchase->supplier_invoice_number,
            'date' => $purchase->date,
            'phone_number' => $purchase->phone_number,
            'address' => $purchase->address,
            'supplier_product_data' => json_decode($purchase->supplier_product_data),
            'status' => $purchase->status,
            'note' => $purchase->note,
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
