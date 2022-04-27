<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Tasks\FindProductsByIdTask;
use App\Containers\AppSection\Products\Tasks\GetAllFilterProductsTask;
use App\Containers\AppSection\Products\UI\API\Transformers\GetAllFilterProductTransformer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllFilterProductAction extends Action
{
    public function run(Request $request) : Products
    {
        // $var = app(Task::class)->run($arg1, $arg2);

        return app(GetAllFilterProductsTask::class)->run($request->business_id);

    }
}
