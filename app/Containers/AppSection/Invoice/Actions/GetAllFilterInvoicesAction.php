<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Tasks\GetAllInvoicesTask;
use App\Ship\Parents\Actions\Action;

class GetAllFilterInvoicesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllFilterInvoicesTask::class)->addRequestCriteria()->run($request);
    }
}
