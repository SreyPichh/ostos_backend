<?php

namespace App\Containers\AppSection\User\UI\API\Transformers;

use App\Containers\AppSection\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;
use League\Fractal\Resource\Collection;

class UserTransformer extends Transformer
{
    protected array $availableIncludes = [
        'roles',
    ];

    protected array $defaultIncludes = [

    ];

    public function transform(User $user): array
    {
        $response = [
            'object' => $user->getResourceKey(),
            'id' => $user->getHashedKey(),
            'name' => $user->name,
            'f_name' => $user->f_name,
            'l_name' => $user->l_name,
            'email' => $user->email,
            'email_verified_at' => $user->email_verified_at,
            'gender' => $user->gender,
            'first_address' => $user->first_address,
            'second_address' => $user->second_address,
            'phone_number' => $user->phone_number,
            'national_id' => $user->national_id,
            'birth' => $user->birth,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
            'readable_created_at' => $user->created_at->diffForHumans(),
            'readable_updated_at' => $user->updated_at->diffForHumans(),
        ];

        $response = $this->ifAdmin([
            'real_id' => $user->id,
        ], $response);

        return $response;
    }

    public function includeRoles(User $user): Collection
    {
        return $this->collection($user->roles, new RoleTransformer());
    }
}
