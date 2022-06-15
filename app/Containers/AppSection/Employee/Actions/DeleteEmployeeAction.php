<?php

namespace App\Containers\AppSection\Employee\Actions;

use App\Containers\AppSection\Employee\Tasks\DeleteEmployeeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteEmployeeAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteEmployeeTask::class)->run($request->id);
    }
}
