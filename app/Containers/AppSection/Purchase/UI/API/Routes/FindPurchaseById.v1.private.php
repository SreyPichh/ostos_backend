<?php

/**
 * @apiGroup           Purchase
 * @apiName            findPurchaseById
 *
 * @api                {GET} /v1/purchases/:id Endpoint title here..
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

use App\Containers\AppSection\Purchase\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('purchases/{id}', [Controller::class, 'findPurchaseById'])
    ->name('api_purchase_find_purchase_by_id')
    ->middleware(['auth:api']);

