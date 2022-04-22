<?php

/**
 * @apiGroup           Business
 * @apiName            
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

use App\Containers\AppSection\Business\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('business_with_categories', [Controller::class, 'getAllBusinessWithCategories'])
    ->name('api_business_get_all_business_with_categories')
    ->middleware(['auth:api']);

