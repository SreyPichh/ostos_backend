<?php

namespace App\Containers\AppSection\NotedBook\Actions;

use App\Containers\AppSection\NotedBook\Tasks\GetAllNotedBooksTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllNotedBooksAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllNotedBooksTask::class)->addRequestCriteria()->run();
    }
}
