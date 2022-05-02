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
            'name' => $request->name,
            'business_id' => $request->business_id,
            'isActive' => $request->isActive,
            'isFavorite' => $request->isFavorite,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return app(CreateProductsTask::class)->run($data);
    }
}
