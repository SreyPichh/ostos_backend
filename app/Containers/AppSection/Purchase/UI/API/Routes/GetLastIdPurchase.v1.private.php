<?php

/**
 * @apiGroup           Purchase
 * @apiName            getLastIdPurchase
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

use App\Containers\AppSection\Purchase\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

    Route::get('getLastIdPurchase', [Controller::class, 'getLastIdPurchase'])
    ->name('api_purchase_get_last_id_purchase')
    ->middleware(['auth:api']);

