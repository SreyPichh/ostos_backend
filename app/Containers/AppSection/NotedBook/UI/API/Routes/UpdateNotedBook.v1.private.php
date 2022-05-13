<?php

/**
 * @apiGroup           NotedBook
 * @apiName            updateNotedBook
 *
 * @api                {PATCH} /v1/notedbooks/:id Endpoint title here..
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

Route::patch('notedbooks/{id}', [Controller::class, 'updateNotedBook'])
    ->name('api_notedbook_update_noted_book')
    ->middleware(['auth:api']);

