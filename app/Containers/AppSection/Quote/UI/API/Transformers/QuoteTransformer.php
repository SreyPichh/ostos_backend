<?php

namespace App\Containers\AppSection\Quote\UI\API\Transformers;

use App\Containers\AppSection\Quote\Models\Quote;
use App\Ship\Parents\Transformers\Transformer;

class QuoteTransformer extends Transformer
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

    public function transform(Quote $quote): array
    {
        $response = [
            'object' => $quote->getResourceKey(),
            'id' => $quote->getHashedKey(),
            'quote_number' => $quote->invoice_number,
            'business_id' => $quote->business_id,
            'customer_id' => $quote->customer_id,
            'po' => $quote->po,
            'date' => $quote->date,
            'due_amount' => $quote->due_amount,
            'employee_data' => json_decode($quote->employee_data),
            'product_data' => json_decode($quote->product_data),
            'sample_img' => $quote->sample_img,
            'quote_note' => $quote->invoice_note,
            'signature' => $quote->signature,
            'status' => $quote->status,
            'total' => $quote->total,
            'customer_info' => json_decode($quote->customer_info),
            'created_at' => $quote->created_at,
            'updated_at' => $quote->updated_at,
            'readable_created_at' => $quote->created_at->diffForHumans(),
            'readable_updated_at' => $quote->updated_at->diffForHumans(),
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $quote->id,
            // 'deleted_at' => $quote->deleted_at,
        ], $response);
    }
}
