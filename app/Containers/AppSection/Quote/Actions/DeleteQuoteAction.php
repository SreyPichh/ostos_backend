<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Tasks\DeleteQuoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteQuoteAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteQuoteTask::class)->run($request->id);
    }
}
