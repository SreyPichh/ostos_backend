<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Tasks\GetAllBusinessesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBusinessesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBusinessesTask::class)->addRequestCriteria()->run();
    }
}
