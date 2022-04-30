<?php

/**
 * @apiGroup           Receipt
 * @apiName            findReceiptById
 *
 * @api                {GET} /v1/receipts/:id Endpoint title here..
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

use App\Containers\AppSection\Receipt\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('receipts/{id}', [Controller::class, 'findReceiptById'])
    ->name('api_receipt_find_receipt_by_id')
    ->middleware(['auth:api']);

