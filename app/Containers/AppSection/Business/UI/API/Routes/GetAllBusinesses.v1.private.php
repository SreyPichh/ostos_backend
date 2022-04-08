<?php

/**
 * @apiGroup           Business
 * @apiName            getAllBusinesses
 *
 * @api                {GET} /v1/businesses Endpoint title here..
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

Route::get('businesses', [Controller::class, 'getAllBusinesses'])
    ->name('api_business_get_all_businesses')
    ->middleware(['auth:api']);

