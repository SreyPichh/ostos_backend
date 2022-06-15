<?php

namespace App\Containers\AppSection\Employee\Actions;

use App\Containers\AppSection\Employee\Models\Employee;
use App\Containers\AppSection\Employee\Tasks\CreateEmployeeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEmployeeAction extends Action
{
    public function run(Request $request): Employee
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateEmployeeTask::class)->run($data);
    }
}
