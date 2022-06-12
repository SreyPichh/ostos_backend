<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Tasks\DeletePurchaseTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeletePurchaseAction extends Action
{
    public function run(Request $request)
    {
        return app(DeletePurchaseTask::class)->run($request->id);
    }
}
