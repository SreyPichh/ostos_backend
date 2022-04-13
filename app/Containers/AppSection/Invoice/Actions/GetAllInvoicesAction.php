<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Tasks\GetAllInvoicesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllInvoicesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllInvoicesTask::class)->addRequestCriteria()->run($request );
    }
}
