<?php

namespace App\Containers\AppSection\Business\UI\API\Transformers;

use App\Containers\AppSection\Business\Models\Business;
use App\Ship\Parents\Transformers\Transformer;

class BusinessTransformer extends Transformer
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

    public function transform(Business $business): array
    {
        $response = [
            'object' => $business->getResourceKey(),
            'id' => $business->getHashedKey(),
            'created_at' => $business->created_at,
            'updated_at' => $business->updated_at,
            'readable_created_at' => $business->created_at->diffForHumans(),
            'readable_updated_at' => $business->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $business->id,
            // 'deleted_at' => $business->deleted_at,
        ], $response);
    }
}
