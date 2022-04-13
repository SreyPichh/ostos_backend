<?php

namespace App\Containers\AppSection\RecentAction\UI\API\Controllers;

use App\Containers\AppSection\RecentAction\UI\API\Requests\CreateRecentActionRequest;
use App\Containers\AppSection\RecentAction\UI\API\Requests\DeleteRecentActionRequest;
use App\Containers\AppSection\RecentAction\UI\API\Requests\GetAllRecentActionsRequest;
use App\Containers\AppSection\RecentAction\UI\API\Requests\FindRecentActionByIdRequest;
use App\Containers\AppSection\RecentAction\UI\API\Requests\UpdateRecentActionRequest;
use App\Containers\AppSection\RecentAction\UI\API\Transformers\RecentActionTransformer;
use App\Containers\AppSection\RecentAction\Actions\CreateRecentActionAction;
use App\Containers\AppSection\RecentAction\Actions\FindRecentActionByIdAction;
use App\Containers\AppSection\RecentAction\Actions\GetAllRecentActionsAction;
use App\Containers\AppSection\RecentAction\Actions\UpdateRecentActionAction;
use App\Containers\AppSection\RecentAction\Actions\DeleteRecentActionAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createRecentAction(CreateRecentActionRequest $request): JsonResponse
    {
        $recentaction = app(CreateRecentActionAction::class)->run($request);
        return $this->created($this->transform($recentaction, RecentActionTransformer::class));
    }

    public function findRecentActionById(FindRecentActionByIdRequest $request): array
    {
        $recentaction = app(FindRecentActionByIdAction::class)->run($request);
        return $this->transform($recentaction, RecentActionTransformer::class);
    }

    public function getAllRecentActions(GetAllRecentActionsRequest $request): array
    {
        $recentactions = app(GetAllRecentActionsAction::class)->run($request);
        return $this->transform($recentactions, RecentActionTransformer::class);
    }

    public function updateRecentAction(UpdateRecentActionRequest $request): array
    {
        $recentaction = app(UpdateRecentActionAction::class)->run($request);
        return $this->transform($recentaction, RecentActionTransformer::class);
    }

    public function deleteRecentAction(DeleteRecentActionRequest $request): JsonResponse
    {
        app(DeleteRecentActionAction::class)->run($request);
        return $this->noContent();
    }
}
