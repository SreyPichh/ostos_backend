<?php

/**
 * @apiGroup           Invoice
 * @apiName            findInvoicesById
 *
 * @api                {GET} /v1/invoices_public/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Invoice\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('invoices_public/{id}', [Controller::class, 'findInvoiceById'])
    ->name('api_invoice_find_invoices_by_id');

