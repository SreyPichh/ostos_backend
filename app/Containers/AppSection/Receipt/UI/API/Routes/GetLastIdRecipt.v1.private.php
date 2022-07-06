<?php

/**
 * @apiGroup           Receipt
 * @apiName            getLastIdReciept
 *
 * @api                {GET} /v1/receipts/getlastid Endpoint title here..
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

Route::get('receipts_getlastid', [Controller::class, 'getLastIdReciept'])
    ->name('api_receipt_get_last_id_reciept')
    ->middleware(['auth:api']);

