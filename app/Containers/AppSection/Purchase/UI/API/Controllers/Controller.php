<?php

namespace App\Containers\AppSection\Purchase\UI\API\Controllers;

use App\Containers\AppSection\Purchase\Actions\GetLastIdPurchasesAction;
use App\Containers\AppSection\Purchase\UI\API\Requests\CreatePurchaseRequest;
use App\Containers\AppSection\Purchase\UI\API\Requests\DeletePurchaseRequest;
use App\Containers\AppSection\Purchase\UI\API\Requests\GetAllPurchasesRequest;
use App\Containers\AppSection\Purchase\UI\API\Requests\FindPurchaseByIdRequest;
use App\Containers\AppSection\Purchase\UI\API\Requests\GetLastIdPurchasesRequest;
use App\Containers\AppSection\Purchase\UI\API\Requests\UpdatePurchaseRequest;
use App\Containers\AppSection\Purchase\UI\API\Transformers\PurchaseTransformer;
use App\Containers\AppSection\Purchase\Actions\CreatePurchaseAction;
use App\Containers\AppSection\Purchase\Actions\FindPurchaseByIdAction;
use App\Containers\AppSection\Purchase\Actions\GetAllPurchasesAction;
use App\Containers\AppSection\Purchase\Actions\UpdatePurchaseAction;
use App\Containers\AppSection\Purchase\Actions\DeletePurchaseAction;
use App\Containers\AppSection\RecentAction\Actions\CreateRecentActionAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createPurchase(CreatePurchaseRequest $request): JsonResponse
    {
        $purchase = app(CreatePurchaseAction::class)->run($request);
        $type_action = 'Create';
        $action_label = 'Purchase';
        app(CreateRecentActionAction::class)->run($purchase->id, $type_action, $action_label);
        return $this->created($this->transform($purchase, PurchaseTransformer::class));
    }

    public function findPurchaseById(FindPurchaseByIdRequest $request): array
    {
        $purchase = app(FindPurchaseByIdAction::class)->run($request);
        return $this->transform($purchase, PurchaseTransformer::class);
    }

    public function getAllPurchases(GetAllPurchasesRequest $request): array
    {
        $purchases = app(GetAllPurchasesAction::class)->run($request);
        return $this->transform($purchases, PurchaseTransformer::class);
    }

    public function getLastIdPurchase(GetLastIdPurchasesRequest $request): array
    {
        $purchases = app(GetLastIdPurchasesAction::class)->run($request);
        return $this->transform($purchases, PurchaseTransformer::class);
    }

    public function updatePurchase(UpdatePurchaseRequest $request): array
    {
        $purchase = app(UpdatePurchaseAction::class)->run($request);
        $type_action = 'Update';
        $action_label = 'Purchase';
        app(CreateRecentActionAction::class)->run($purchase->id, $type_action, $action_label);
        return $this->transform($purchase, PurchaseTransformer::class);
    }

    public function deletePurchase(DeletePurchaseRequest $request): JsonResponse
    {
        $purchase = app(DeletePurchaseAction::class)->run($request);
        $type_action = 'Delete';
        $action_label = 'Purchase';
        app(CreateRecentActionAction::class)->run($purchase, $type_action, $action_label);
        return $this->noContent();
    }
}
