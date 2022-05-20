<?php

/**
 * @apiGroup           Invoice
 * @apiName            GetAllFilterInvoices
 *
 * @api                {GET} /v1/ Endpoint title here..
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

Route::get('invoice_filter', [Controller::class, 'getAllFilterInvoices'])
    ->name('api_invoice_get_all_filter_invoices')
    ->middleware(['auth:api']);

