<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Tasks\GetAllQuotesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllQuotesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllQuotesTask::class)->addRequestCriteria()->run();
    }
}
