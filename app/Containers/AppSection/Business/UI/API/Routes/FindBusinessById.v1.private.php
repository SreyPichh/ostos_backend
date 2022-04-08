<?php

/**
 * @apiGroup           Business
 * @apiName            findBusinessById
 *
 * @api                {GET} /v1/businesses/:id Endpoint title here..
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

use App\Containers\AppSection\Business\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('businesses/{id}', [Controller::class, 'findBusinessById'])
    ->name('api_business_find_business_by_id')
    ->middleware(['auth:api']);

