<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Tasks\DeleteInvoiceTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteInvoiceAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteInvoiceTask::class)->run($request->id);
    }
}
