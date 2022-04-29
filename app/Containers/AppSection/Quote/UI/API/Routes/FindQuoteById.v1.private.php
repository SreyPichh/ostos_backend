<?php

/**
 * @apiGroup           Quote
 * @apiName            findQuoteById
 *
 * @api                {GET} /v1/quotes/:id Endpoint title here..
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

use App\Containers\AppSection\Quote\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('quotes/{id}', [Controller::class, 'findQuoteById'])
    ->name('api_quote_find_quote_by_id')
    ->middleware(['auth:api']);

