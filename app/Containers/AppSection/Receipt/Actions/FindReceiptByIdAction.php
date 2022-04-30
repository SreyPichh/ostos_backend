<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Models\Receipt;
use App\Containers\AppSection\Receipt\Tasks\FindReceiptByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindReceiptByIdAction extends Action
{
    public function run(Request $request): Receipt
    {
        return app(FindReceiptByIdTask::class)->run($request->id);
    }
}
