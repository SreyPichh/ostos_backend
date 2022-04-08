<?php

/**
 * @apiGroup           Products
 * @apiName            findProductsById
 *
 * @api                {GET} /v1/products/:id Endpoint title here..
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

Route::get('products/{id}', [Controller::class, 'findProductsById'])
    ->name('api_products_find_products_by_id')
    ->middleware(['auth:api']);

