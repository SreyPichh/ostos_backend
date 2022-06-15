<?php

namespace App\Containers\AppSection\Employee\Actions;

use App\Containers\AppSection\Employee\Models\Employee;
use App\Containers\AppSection\Employee\Tasks\FindEmployeeByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindEmployeeByIdAction extends Action
{
    public function run(Request $request): Employee
    {
        return app(FindEmployeeByIdTask::class)->run($request->id);
    }
}
