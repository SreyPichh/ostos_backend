<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Tasks\GetAllBusinessWithCategoriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBusinessWithCategoriesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBusinessWithCategoriesTask::class)->addRequestCriteria()->run();
    }
}
