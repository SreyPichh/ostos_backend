<?php

/**
 * @apiGroup           Products
 * @apiName            getAllFilterProducts
 *
 * @api                {GET} /v1/products Endpoint title here..
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

use App\Containers\AppSection\Products\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('products_filter', [Controller::class, 'getAllFilterProducts'])
    ->name('api_products_get_all_filter_products')
    ->middleware(['auth:api']);

