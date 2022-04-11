<?php

namespace App\Containers\AppSection\Business\UI\API\Transformers;

use App\Containers\AppSection\Business\Models\Business;
use App\Ship\Parents\Transformers\Transformer;

class BusinessTransformer extends Transformer
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

    public function transform(Business $business): array
    {
        $response = [
            'object' => $business->getResourceKey(),
            'id' => $business->getHashedKey(),
            'name' => $business->name,
            'logo' => $business->logo,
            'address' => $business->address,
            'phone_number' => $business->phone_number,
            'email' => $business->email,
            'aba_name' => $business->aba_name,
            'acc_number' => $business->acc_number,
            'qr_code' => $business->qr_code,
            'invoice_toptext' => $business->invoice_toptext,
            'invoice_note' => $business->invoice_note,
            'digital_sign' => $business->digital_sign,
            'facebook_link' => $business->facebook_link,
            'instagram_link' => $business->instagram_link,
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
