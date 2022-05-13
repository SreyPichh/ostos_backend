<?php

namespace App\Containers\AppSection\NotedBook\Actions;

use App\Containers\AppSection\NotedBook\Models\NotedBook;
use App\Containers\AppSection\NotedBook\Tasks\FindNotedBookByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindNotedBookByIdAction extends Action
{
    public function run(Request $request): NotedBook
    {
        return app(FindNotedBookByIdTask::class)->run($request->id);
    }
}
