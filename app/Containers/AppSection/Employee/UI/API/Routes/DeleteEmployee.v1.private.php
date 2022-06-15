<?php

/**
 * @apiGroup           Employee
 * @apiName            deleteEmployee
 *
 * @api                {DELETE} /v1/employees/:id Endpoint title here..
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

use App\Containers\AppSection\Employee\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('employees/{id}', [Controller::class, 'deleteEmployee'])
    ->name('api_employee_delete_employee')
    ->middleware(['auth:api']);

