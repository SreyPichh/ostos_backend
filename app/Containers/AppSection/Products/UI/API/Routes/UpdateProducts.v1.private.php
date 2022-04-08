<?php

/**
 * @apiGroup           Products
 * @apiName            updateProducts
 *
 * @api                {PATCH} /v1/products/:id Endpoint title here..
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

Route::patch('products/{id}', [Controller::class, 'updateProducts'])
    ->name('api_products_update_products')
    ->middleware(['auth:api']);

