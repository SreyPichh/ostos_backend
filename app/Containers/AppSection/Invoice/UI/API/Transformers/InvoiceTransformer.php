<?php

namespace App\Containers\AppSection\Invoice\UI\API\Transformers;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Ship\Parents\Transformers\Transformer;

class InvoiceTransformer extends Transformer
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

    public function transform(Invoice $invoice): array
    {
        $response = [
            'object' => $invoice->getResourceKey(),
            'id' => $invoice->getHashedKey(),
            'created_at' => $invoice->created_at,
            'updated_at' => $invoice->updated_at,
            'readable_created_at' => $invoice->created_at->diffForHumans(),
            'readable_updated_at' => $invoice->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $invoice->id,
            // 'deleted_at' => $invoice->deleted_at,
        ], $response);
    }
}
