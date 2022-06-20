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
