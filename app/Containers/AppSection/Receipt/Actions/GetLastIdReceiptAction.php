<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Tasks\GetLastIdReceiptTask;
use App\Ship\Parents\Actions\Action;

class GetLastIdReceiptAction extends Action
{
    public function run()
    {
        return app(GetLastIdReceiptTask::class)->addRequestCriteria()->run();
    }
}
