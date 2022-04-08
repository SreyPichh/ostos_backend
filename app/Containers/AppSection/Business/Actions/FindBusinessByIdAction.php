<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Business\Tasks\FindBusinessByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBusinessByIdAction extends Action
{
    public function run(Request $request): Business
    {
        return app(FindBusinessByIdTask::class)->run($request->id);
    }
}
