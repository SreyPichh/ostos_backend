<?php

namespace App\Containers\AppSection\NotedBook\UI\API\Transformers;

use App\Containers\AppSection\NotedBook\Models\NotedBook;
use App\Ship\Parents\Transformers\Transformer;

class NotedBookTransformer extends Transformer
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

    public function transform(NotedBook $notedbook): array
    {
        $response = [
            'object' => $notedbook->getResourceKey(),
            'id' => $notedbook->getHashedKey(),
            'title' => $notedbook->title,
            'description' => $notedbook->description,
            'created_at' => $notedbook->created_at,
            'updated_at' => $notedbook->updated_at,
            'readable_created_at' => $notedbook->created_at->diffForHumans(),
            'readable_updated_at' => $notedbook->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $notedbook->id,
            // 'deleted_at' => $notedbook->deleted_at,
        ], $response);
    }
}
