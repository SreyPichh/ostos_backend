<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Models\Products;
use App\Containers\AppSection\Products\Tasks\FindProductsByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindProductsByIdAction extends Action
{
    public function run(Request $request): Products
    {
        return app(FindProductsByIdTask::class)->run($request->id);
    }
}
