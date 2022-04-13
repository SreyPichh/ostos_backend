<?php

namespace App\Containers\AppSection\RecentAction\Actions;

use App\Containers\AppSection\RecentAction\Models\RecentAction;
use App\Containers\AppSection\RecentAction\Tasks\FindRecentActionByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindRecentActionByIdAction extends Action
{
    public function run(Request $request): RecentAction
    {
        return app(FindRecentActionByIdTask::class)->run($request->id);
    }
}
