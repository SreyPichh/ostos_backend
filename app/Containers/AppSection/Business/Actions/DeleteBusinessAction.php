<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Tasks\DeleteBusinessTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBusinessAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBusinessTask::class)->run($request->id);
    }
}
