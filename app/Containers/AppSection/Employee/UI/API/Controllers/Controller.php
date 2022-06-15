<?php

namespace App\Containers\AppSection\Employee\UI\API\Controllers;

use App\Containers\AppSection\Employee\UI\API\Requests\CreateEmployeeRequest;
use App\Containers\AppSection\Employee\UI\API\Requests\DeleteEmployeeRequest;
use App\Containers\AppSection\Employee\UI\API\Requests\GetAllEmployeesRequest;
use App\Containers\AppSection\Employee\UI\API\Requests\FindEmployeeByIdRequest;
use App\Containers\AppSection\Employee\UI\API\Requests\UpdateEmployeeRequest;
use App\Containers\AppSection\Employee\UI\API\Transformers\EmployeeTransformer;
use App\Containers\AppSection\Employee\Actions\CreateEmployeeAction;
use App\Containers\AppSection\Employee\Actions\FindEmployeeByIdAction;
use App\Containers\AppSection\Employee\Actions\GetAllEmployeesAction;
use App\Containers\AppSection\Employee\Actions\UpdateEmployeeAction;
use App\Containers\AppSection\Employee\Actions\DeleteEmployeeAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createEmployee(CreateEmployeeRequest $request): JsonResponse
    {
        $employee = app(CreateEmployeeAction::class)->run($request);
        return $this->created($this->transform($employee, EmployeeTransformer::class));
    }

    public function findEmployeeById(FindEmployeeByIdRequest $request): array
    {
        $employee = app(FindEmployeeByIdAction::class)->run($request);
        return $this->transform($employee, EmployeeTransformer::class);
    }

    public function getAllEmployees(GetAllEmployeesRequest $request): array
    {
        $employees = app(GetAllEmployeesAction::class)->run($request);
        return $this->transform($employees, EmployeeTransformer::class);
    }

    public function updateEmployee(UpdateEmployeeRequest $request): array
    {
        $employee = app(UpdateEmployeeAction::class)->run($request);
        return $this->transform($employee, EmployeeTransformer::class);
    }

    public function deleteEmployee(DeleteEmployeeRequest $request): JsonResponse
    {
        app(DeleteEmployeeAction::class)->run($request);
        return $this->noContent();
    }
}
