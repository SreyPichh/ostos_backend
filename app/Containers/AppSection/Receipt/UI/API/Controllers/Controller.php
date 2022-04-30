<?php

namespace App\Containers\AppSection\Receipt\UI\API\Controllers;

use App\Containers\AppSection\Receipt\UI\API\Requests\CreateReceiptRequest;
use App\Containers\AppSection\Receipt\UI\API\Requests\DeleteReceiptRequest;
use App\Containers\AppSection\Receipt\UI\API\Requests\GetAllReceiptsRequest;
use App\Containers\AppSection\Receipt\UI\API\Requests\FindReceiptByIdRequest;
use App\Containers\AppSection\Receipt\UI\API\Requests\UpdateReceiptRequest;
use App\Containers\AppSection\Receipt\UI\API\Transformers\ReceiptTransformer;
use App\Containers\AppSection\Receipt\Actions\CreateReceiptAction;
use App\Containers\AppSection\Receipt\Actions\FindReceiptByIdAction;
use App\Containers\AppSection\Receipt\Actions\GetAllReceiptsAction;
use App\Containers\AppSection\Receipt\Actions\UpdateReceiptAction;
use App\Containers\AppSection\Receipt\Actions\DeleteReceiptAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createReceipt(CreateReceiptRequest $request): JsonResponse
    {
        $receipt = app(CreateReceiptAction::class)->run($request);
        return $this->created($this->transform($receipt, ReceiptTransformer::class));
    }

    public function findReceiptById(FindReceiptByIdRequest $request): array
    {
        $receipt = app(FindReceiptByIdAction::class)->run($request);
        return $this->transform($receipt, ReceiptTransformer::class);
    }

    public function getAllReceipts(GetAllReceiptsRequest $request): array
    {
        $receipts = app(GetAllReceiptsAction::class)->run($request);
        return $this->transform($receipts, ReceiptTransformer::class);
    }

    public function updateReceipt(UpdateReceiptRequest $request): array
    {
        $receipt = app(UpdateReceiptAction::class)->run($request);
        return $this->transform($receipt, ReceiptTransformer::class);
    }

    public function deleteReceipt(DeleteReceiptRequest $request): JsonResponse
    {
        app(DeleteReceiptAction::class)->run($request);
        return $this->noContent();
    }
}
