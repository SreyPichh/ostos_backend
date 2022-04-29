<?php

/**
 * @apiGroup           Quote
 * @apiName            deleteQuote
 *
 * @api                {DELETE} /v1/quotes/:id Endpoint title here..
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

Route::delete('quotes/{id}', [Controller::class, 'deleteQuote'])
    ->name('api_quote_delete_quote')
    ->middleware(['auth:api']);

