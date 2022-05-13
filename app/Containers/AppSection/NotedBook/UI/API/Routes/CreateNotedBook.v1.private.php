<?php

/**
 * @apiGroup           NotedBook
 * @apiName            createNotedBook
 *
 * @api                {POST} /v1/notedbooks Endpoint title here..
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

use App\Containers\AppSection\NotedBook\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('notedbooks', [Controller::class, 'createNotedBook'])
    ->name('api_notedbook_create_noted_book')
    ->middleware(['auth:api']);

