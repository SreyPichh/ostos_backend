<?php

namespace App\Containers\AppSection\Receipt\UI\API\Transformers;

use App\Containers\AppSection\Receipt\Models\Receipt;
use App\Ship\Parents\Transformers\Transformer;

class ReceiptTransformer extends Transformer
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

    public function transform(Receipt $receipt): array
    {
        $response = [
            'object' => $receipt->getResourceKey(),
            'id' => $receipt->getHashedKey(),
            'date' => $receipt->date,
            'paymentOf' => $receipt->paymentOf,
            'amount' => $receipt->amount,
            'type' => $receipt->type,
            'no' => $receipt->no,
            'customer_info' => json_decode($receipt->customer_info),
            'signature' => $receipt->signature,
            'created_at' => $receipt->created_at,
            'updated_at' => $receipt->updated_at,
            'readable_created_at' => $receipt->created_at->diffForHumans(),
            'readable_updated_at' => $receipt->updated_at->diffForHumans(),
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $receipt->id,
            // 'deleted_at' => $receipt->deleted_at,
        ], $response);
    }
}
