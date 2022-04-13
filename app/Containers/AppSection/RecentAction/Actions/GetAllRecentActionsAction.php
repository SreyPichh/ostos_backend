<?php

namespace App\Containers\AppSection\RecentAction\Actions;

use App\Containers\AppSection\RecentAction\Tasks\GetAllRecentActionsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllRecentActionsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllRecentActionsTask::class)->addRequestCriteria()->run();
    }
}
