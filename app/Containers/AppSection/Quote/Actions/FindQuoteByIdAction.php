<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Models\Quote;
use App\Containers\AppSection\Quote\Tasks\FindQuoteByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindQuoteByIdAction extends Action
{
    public function run(Request $request): Quote
    {
        return app(FindQuoteByIdTask::class)->run($request->id);
    }
}
