<?php

/**
 * @apiGroup           RecentAction
 * @apiName            findRecentActionById
 *
 * @api                {GET} /v1/recentactions/:id Endpoint title here..
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

use App\Containers\AppSection\RecentAction\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('recentactions/{id}', [Controller::class, 'findRecentActionById'])
    ->name('api_recentaction_find_recent_action_by_id')
    ->middleware(['auth:api']);

