<?php

/**
 * @apiGroup           Quote
 * @apiName            createQuote
 *
 * @api                {POST} /v1/quotes Endpoint title here..
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

Route::post('quotes', [Controller::class, 'createQuote'])
    ->name('api_quote_create_quote')
    ->middleware(['auth:api']);

