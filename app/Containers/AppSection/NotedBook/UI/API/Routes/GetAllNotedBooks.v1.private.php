<?php

/**
 * @apiGroup           NotedBook
 * @apiName            getAllNotedBooks
 *
 * @api                {GET} /v1/notedbooks Endpoint title here..
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

Route::get('notedbooks', [Controller::class, 'getAllNotedBooks'])
    ->name('api_notedbook_get_all_noted_books')
    ->middleware(['auth:api']);

