<?php

namespace App\Containers\AppSection\Products\Actions;

use App\Containers\AppSection\Products\Models\Products;
use App\Containers\AppSection\Products\Tasks\CreateProductsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Auth;

class CreateProductsAction extends Action
{
    public function run(Request $request): Products
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'employee_id' => Auth::user()->id,
            'name' => $request->name,
            'business_id' => $request->business_id,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return app(CreateProductsTask::class)->run($data);
    }
}
