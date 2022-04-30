<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Tasks\GetAllReceiptsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllReceiptsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllReceiptsTask::class)->addRequestCriteria()->run();
    }
}
