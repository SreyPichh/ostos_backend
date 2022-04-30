<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Tasks\DeleteReceiptTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteReceiptAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteReceiptTask::class)->run($request->id);
    }
}
