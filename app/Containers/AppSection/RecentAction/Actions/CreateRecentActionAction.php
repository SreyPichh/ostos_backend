<?php

namespace App\Containers\AppSection\RecentAction\Actions;

use App\Containers\AppSection\RecentAction\Models\RecentAction;
use App\Containers\AppSection\RecentAction\Tasks\CreateRecentActionTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateRecentActionAction extends Action
{
    public function run(Request $request): RecentAction
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateRecentActionTask::class)->run($data);
    }
}
