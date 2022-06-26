<?php

/**
 * @apiGroup           Invoice
 * @apiName            createInvoice
 *
 * @api                {POST} /v1/invoices Endpoint title here..
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

Route::post('invoices', [Controller::class, 'createInvoice'])
    ->name('api_invoice_create_invoice')
    ->middleware(['auth:api']);

