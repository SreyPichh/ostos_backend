<?php

/**
 * @apiGroup           Employee
 * @apiName            getAllEmployees
 *
 * @api                {GET} /v1/employees Endpoint title here..
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

Route::get('employees', [Controller::class, 'getAllEmployees'])
    ->name('api_employee_get_all_employees')
    ->middleware(['auth:api']);

