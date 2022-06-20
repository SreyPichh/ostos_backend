<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Models\Quote;
use App\Containers\AppSection\Quote\Tasks\UpdateQuoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateQuoteAction extends Action
{
    public function run(Request $request): Quote
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateQuoteTask::class)->run($request->id, $data);
    }
}
