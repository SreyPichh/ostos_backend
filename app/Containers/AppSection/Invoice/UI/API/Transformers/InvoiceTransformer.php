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
            'business_id' => $invoice->business_id,
            'customer_id' => $invoice->customer_id,
            'po' => $invoice->po,
            'date' => $invoice->date,
            'due_amount' => $invoice->due_amount,
            'employee_data' => json_decode($invoice->employee_data),
            'product_data' => json_decode($invoice->product_data),
            'sample_img' => $invoice->sample_img,
            'invoice_note' => $invoice->invoice_note,
            'signature' => $invoice->signature,
            'status' => $invoice->status,
            'total' => $invoice->total,
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
