<?php

namespace App\Containers\AppSection\RecentAction\Actions;

use App\Containers\AppSection\RecentAction\Tasks\DeleteRecentActionTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteRecentActionAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteRecentActionTask::class)->run($request->id);
    }
}
