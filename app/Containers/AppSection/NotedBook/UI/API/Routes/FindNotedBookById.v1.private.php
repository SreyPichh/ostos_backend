<?php

/**
 * @apiGroup           NotedBook
 * @apiName            findNotedBookById
 *
 * @api                {GET} /v1/notedbooks/:id Endpoint title here..
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

Route::get('notedbooks/{id}', [Controller::class, 'findNotedBookById'])
    ->name('api_notedbook_find_noted_book_by_id')
    ->middleware(['auth:api']);

