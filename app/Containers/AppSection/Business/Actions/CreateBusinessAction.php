<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Business\Tasks\CreateBusinessTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBusinessAction extends Action
{
    public function run(Request $request): Business
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBusinessTask::class)->run($data);
    }
}
