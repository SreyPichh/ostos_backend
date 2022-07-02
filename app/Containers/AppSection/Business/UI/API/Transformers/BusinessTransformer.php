<?php

namespace App\Containers\AppSection\Business\UI\API\Transformers;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Products\UI\API\Transformers\ProductsTransformer;
use App\Ship\Parents\Transformers\Transformer;
use League\Fractal\Resource\Collection;

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
        'product'
    ];

    public function transform(Business $business): array
    {
        $response = [
            'object' => $business->getResourceKey(),
            'id' => $business->getHashedKey(),
            'name' => $business->name,
            'logo' => $business->logo,
            'address' => $business->address,
            'phone_number1' => $business->phone_number1,
            'phone_number2' => $business->phone_number2,
            'phone_number3' => $business->phone_number3,
            'telegram' => $business->telegram,
            'email' => $business->email,
            'aba_name' => $business->aba_name,
            'acc_number' => $business->acc_number,
            'qr_code' => $business->qr_code,
            'invoice_toptext' => $business->invoice_toptext,
            'invoice_note' => $business->invoice_note,
            'personal_info' => $business->personal_info,
            'quote_note' => $business->quote_note,
            'digital_sign' => $business->digital_sign,
            'facebook_link' => $business->facebook_link,
            'instagram_link' => $business->instagram_link,
            'invoice_footer' => $business->invoice_footer,
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
    public function includeProduct(Business $business): Collection
    {
        return $this->collection($business->product, new ProductsTransformer());
    }
}
