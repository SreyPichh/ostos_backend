<?php

namespace App\Containers\AppSection\Employee\Actions;

use App\Containers\AppSection\Employee\Tasks\GetAllEmployeesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllEmployeesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllEmployeesTask::class)->addRequestCriteria()->run();
    }
}
