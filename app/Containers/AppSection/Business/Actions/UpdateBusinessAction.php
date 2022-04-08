<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Business\Tasks\UpdateBusinessTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBusinessAction extends Action
{
    public function run(Request $request): Business
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBusinessTask::class)->run($request->id, $data);
    }
}
