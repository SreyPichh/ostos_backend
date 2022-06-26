<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Tasks\GetLastIdTask;
use App\Ship\Parents\Actions\Action;

class GetLastIdAction extends Action
{
    public function run(Request $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        return app(GetLastIdTask::class)->addRequestCriteria()->run($request);
    }
}
