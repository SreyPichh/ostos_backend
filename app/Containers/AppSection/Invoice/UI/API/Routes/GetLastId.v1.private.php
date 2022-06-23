<?php

/**
 * @apiGroup           Invoice
 * @apiName            GetLastId
 *
 * @api                {GET} /v1/getlastid Endpoint title here..
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

Route::get('get_last_id', [Controller::class, 'getLastId'])
    ->name('api_invoice_get_last_id')
    ->middleware(['auth:api']);

