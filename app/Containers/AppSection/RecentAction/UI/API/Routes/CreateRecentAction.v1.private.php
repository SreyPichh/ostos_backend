<?php

/**
 * @apiGroup           RecentAction
 * @apiName            createRecentAction
 *
 * @api                {POST} /v1/recentactions Endpoint title here..
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

Route::post('recentactions', [Controller::class, 'createRecentAction'])
    ->name('api_recentaction_create_recent_action')
    ->middleware(['auth:api']);

