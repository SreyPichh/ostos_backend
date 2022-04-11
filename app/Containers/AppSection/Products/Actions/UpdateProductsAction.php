<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Models\Products;
use App\Containers\AppSection\Products\Tasks\UpdateProductsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateProductsAction extends Action
{
    public function run(Request $request): Products
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'employee_id',
            'name',
            'business_id',
            'price',
            'description'
        ]);

        return app(UpdateProductsTask::class)->run($request->id, $data);
    }
}
