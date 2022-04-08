<?php

/**
 * @apiGroup           Business
 * @apiName            updateBusiness
 *
 * @api                {PATCH} /v1/businesses/:id Endpoint title here..
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

Route::patch('businesses/{id}', [Controller::class, 'updateBusiness'])
    ->name('api_business_update_business')
    ->middleware(['auth:api']);

