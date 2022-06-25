<?php

namespace App\Containers\AppSection\Customer\UI\API\Transformers;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Ship\Parents\Transformers\Transformer;

class CustomerTransformer extends Transformer
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

    public function transform(Customer $customer): array
    {
        $response = [
            'object' => $customer->getResourceKey(),
            'id' => $customer->getHashedKey(),
            'customer_name' => $customer->customer_name,
            'customer_company' => $customer->customer_company,
            'po' => $customer->po,
            'customer_email' => $customer->customer_email,
            'customer_phone_number' => $customer->customer_phone_number,
            'customer_phone_number_2' => $customer->customer_phone_number_2,
            'gender' => $customer->gender,
            'status' => $customer->status,
            'customer_address1' => $customer->customer_address1,
            'customer_address2' => $customer->customer_address2,
            'created_at' => $customer->created_at,
            'updated_at' => $customer->updated_at,
            'readable_created_at' => $customer->created_at->diffForHumans(),
            'readable_updated_at' => $customer->updated_at->diffForHumans(),
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $customer->id,
            // 'deleted_at' => $customer->deleted_at,
        ], $response);
    }
}
