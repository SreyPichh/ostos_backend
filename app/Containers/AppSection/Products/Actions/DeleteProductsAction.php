<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Tasks\DeleteProductsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteProductsAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteProductsTask::class)->run($request->id);
    }
}
