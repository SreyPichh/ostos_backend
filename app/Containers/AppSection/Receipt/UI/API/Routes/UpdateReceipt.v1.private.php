<?php

/**
 * @apiGroup           Receipt
 * @apiName            updateReceipt
 *
 * @api                {PATCH} /v1/receipts/:id Endpoint title here..
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

Route::patch('receipts/{id}', [Controller::class, 'updateReceipt'])
    ->name('api_receipt_update_receipt')
    ->middleware(['auth:api']);

