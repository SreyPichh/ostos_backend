<?php

namespace App\Containers\AppSection\NotedBook\Actions;

use App\Containers\AppSection\NotedBook\Tasks\DeleteNotedBookTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteNotedBookAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteNotedBookTask::class)->run($request->id);
    }
}
