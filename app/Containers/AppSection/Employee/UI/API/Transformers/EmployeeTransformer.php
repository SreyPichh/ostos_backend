<?php

namespace App\Containers\AppSection\Employee\UI\API\Transformers;

use App\Containers\AppSection\Employee\Models\Employee;
use App\Ship\Parents\Transformers\Transformer;

class EmployeeTransformer extends Transformer
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

    public function transform(Employee $employee): array
    {
        $response = [
            'object' => $employee->getResourceKey(),
            'id' => $employee->getHashedKey(),
            'name' => $employee->name,
            'gender'=> $employee->gender,
            'first_address' => $employee->first_address,
            'second_address' => $employee->second_address,
            'phone_number' => $employee->phone_number,
            'national_id' => $employee->national_id,
            'profile_img' => $employee->profile_img,
            'created_at' => $employee->created_at,
            'updated_at' => $employee->updated_at,
            'readable_created_at' => $employee->created_at->diffForHumans(),
            'readable_updated_at' => $employee->updated_at->diffForHumans(),
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $employee->id,
            // 'deleted_at' => $employee->deleted_at,
        ], $response);
    }
}
