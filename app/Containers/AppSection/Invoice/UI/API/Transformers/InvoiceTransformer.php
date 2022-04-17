<?php

namespace App\Containers\AppSection\Invoice\UI\API\Transformers;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Ship\Parents\Transformers\Transformer;

class InvoiceTransformer extends Transformer
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

    public function transform(Invoice $invoice): array
    {
        $response = [
            'object' => $invoice->getResourceKey(),
            'id' => $invoice->getHashedKey(),
            'invoice_number' => $invoice->invoice_number,
            'employee_id' => $invoice->employee_id,
            'business_id' => $invoice->business_id,
            'product_id' => $invoice->product_id,
            'customer_name' => $invoice->customer_name,
            'status' => $invoice->status,
            'Total' => $invoice->Total,
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
