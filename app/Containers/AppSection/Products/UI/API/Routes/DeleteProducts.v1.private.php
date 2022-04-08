<?php

/**
 * @apiGroup           Products
 * @apiName            deleteProducts
 *
 * @api                {DELETE} /v1/products/:id Endpoint title here..
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

Route::delete('products/{id}', [Controller::class, 'deleteProducts'])
    ->name('api_products_delete_products')
    ->middleware(['auth:api']);

