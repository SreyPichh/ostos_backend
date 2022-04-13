<?php

namespace App\Containers\AppSection\RecentAction\UI\API\Transformers;

use App\Containers\AppSection\RecentAction\Models\RecentAction;
use App\Ship\Parents\Transformers\Transformer;

class RecentActionTransformer extends Transformer
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

    public function transform(RecentAction $recentaction): array
    {
        $response = [
            'object' => $recentaction->getResourceKey(),
            'id' => $recentaction->getHashedKey(),
            'action_id' => $recentaction->action_id,
            'type_action' => $recentaction->type_action,
            'action_label' => $recentaction->action_label,
            'created_at' => $recentaction->created_at,
            'updated_at' => $recentaction->updated_at,
            'readable_created_at' => $recentaction->created_at->diffForHumans(),
            'readable_updated_at' => $recentaction->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $recentaction->id,
            // 'deleted_at' => $recentaction->deleted_at,
        ], $response);
    }
}
