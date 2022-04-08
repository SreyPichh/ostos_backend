<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Tasks\GetAllProductsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllProductsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllProductsTask::class)->addRequestCriteria()->run();
    }
}
