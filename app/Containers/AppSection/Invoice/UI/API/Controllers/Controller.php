<?php

namespace App\Containers\AppSection\Invoice\UI\API\Controllers;

use App\Containers\AppSection\Invoice\UI\API\Requests\CreateInvoiceRequest;
use App\Containers\AppSection\Invoice\UI\API\Requests\DeleteInvoiceRequest;
use App\Containers\AppSection\Invoice\UI\API\Requests\GetAllInvoicesRequest;
use App\Containers\AppSection\Invoice\UI\API\Requests\FindInvoiceByIdRequest;
use App\Containers\AppSection\Invoice\UI\API\Requests\UpdateInvoiceRequest;
use App\Containers\AppSection\Invoice\UI\API\Transformers\InvoiceTransformer;
use App\Containers\AppSection\Invoice\Actions\CreateInvoiceAction;
use App\Containers\AppSection\Invoice\Actions\FindInvoiceByIdAction;
use App\Containers\AppSection\Invoice\Actions\GetAllInvoicesAction;
use App\Containers\AppSection\Invoice\Actions\UpdateInvoiceAction;
use App\Containers\AppSection\Invoice\Actions\DeleteInvoiceAction;
use App\Containers\AppSection\RecentAction\Actions\CreateRecentActionAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createInvoice(CreateInvoiceRequest $request)
    {
        $invoice = app(CreateInvoiceAction::class)->run($request);
        $type_action = 'Create';
        $action_label = 'Invoice';
        app(CreateRecentActionAction::class)->run($invoice->id, $type_action, $action_label);
        return $this->created($this->transform($invoice, InvoiceTransformer::class));
    }

    public function findInvoiceById(FindInvoiceByIdRequest $request): array
    {
        $invoice = app(FindInvoiceByIdAction::class)->run($request);
        return $this->transform($invoice, InvoiceTransformer::class);
    }

    public function getAllInvoices(GetAllInvoicesRequest $request): array
    {
        $invoices = app(GetAllInvoicesAction::class)->run($request);
        return $this->transform($invoices, InvoiceTransformer::class);
    }

//    public function getLatestId(GetLastIdRequest $request): array
//    {
//        $invoice = app(GetLastIdAction::class)->run($request);
//        return $this->transform($invoice, InvoiceTransformer::class);
//    }

//    public function getAllFilterInvoices(GetAllFilterInvoicesRequest $request): array
//    {
//        $invoice = app(GetAllFilterInvoicesAction::class)->run($request);
//        return $this->transform($invoice, InvoiceTransformer::class);
//    }

    public function updateInvoice(UpdateInvoiceRequest $request): array
    {
        $invoice = app(UpdateInvoiceAction::class)->run($request);
        $type_action = 'Update';
        $action_label = 'Invoice';
        app(CreateRecentActionAction::class)->run($invoice->id, $type_action, $action_label);
        return $this->transform($invoice, InvoiceTransformer::class);
    }

    public function deleteInvoice(DeleteInvoiceRequest $request): JsonResponse
    {
        $invoice = app(DeleteInvoiceAction::class)->run($request);
        $type_action = 'Delete';
        $action_label = 'Invoice';
        app(CreateRecentActionAction::class)->run($invoice, $type_action, $action_label);
        return $this->noContent();
    }
}
