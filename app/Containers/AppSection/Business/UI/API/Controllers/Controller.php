<?php

namespace App\Containers\AppSection\Business\UI\API\Controllers;

use App\Containers\AppSection\Business\UI\API\Requests\CreateBusinessRequest;
use App\Containers\AppSection\Business\UI\API\Requests\DeleteBusinessRequest;
use App\Containers\AppSection\Business\UI\API\Requests\GetAllBusinessesRequest;
use App\Containers\AppSection\Business\UI\API\Requests\FindBusinessByIdRequest;
use App\Containers\AppSection\Business\UI\API\Requests\UpdateBusinessRequest;
use App\Containers\AppSection\Business\UI\API\Transformers\BusinessTransformer;
use App\Containers\AppSection\Business\Actions\CreateBusinessAction;
use App\Containers\AppSection\Business\Actions\FindBusinessByIdAction;
use App\Containers\AppSection\Business\Actions\GetAllBusinessesAction;
use App\Containers\AppSection\Business\Actions\UpdateBusinessAction;
use App\Containers\AppSection\Business\Actions\DeleteBusinessAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createBusiness(CreateBusinessRequest $request): JsonResponse
    {
        $business = app(CreateBusinessAction::class)->run($request);
        return $this->created($this->transform($business, BusinessTransformer::class));
    }

    public function findBusinessById(FindBusinessByIdRequest $request): array
    {
        $business = app(FindBusinessByIdAction::class)->run($request);
        return $this->transform($business, BusinessTransformer::class);
    }

    public function getAllBusinesses(GetAllBusinessesRequest $request): array
    {
        $businesses = app(GetAllBusinessesAction::class)->run($request);
        return $this->transform($businesses, BusinessTransformer::class);
    }

    public function updateBusiness(UpdateBusinessRequest $request): array
    {
        $business = app(UpdateBusinessAction::class)->run($request);
        return $this->transform($business, BusinessTransformer::class);
    }

    public function deleteBusiness(DeleteBusinessRequest $request): JsonResponse
    {
        app(DeleteBusinessAction::class)->run($request);
        return $this->noContent();
    }
}
