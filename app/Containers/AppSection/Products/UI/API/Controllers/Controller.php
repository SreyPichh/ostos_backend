<?php

namespace App\Containers\AppSection\Products\UI\API\Controllers;

use App\Containers\AppSection\Products\UI\API\Requests\CreateProductsRequest;
use App\Containers\AppSection\Products\UI\API\Requests\DeleteProductsRequest;
use App\Containers\AppSection\Products\UI\API\Requests\GetAllProductsRequest;
use App\Containers\AppSection\Products\UI\API\Requests\FindProductsByIdRequest;
use App\Containers\AppSection\Products\UI\API\Requests\UpdateProductsRequest;
use App\Containers\AppSection\Products\UI\API\Transformers\ProductsTransformer;
use App\Containers\AppSection\Products\Actions\CreateProductsAction;
use App\Containers\AppSection\Products\Actions\FindProductsByIdAction;
use App\Containers\AppSection\Products\Actions\GetAllProductsAction;
use App\Containers\AppSection\Products\Actions\UpdateProductsAction;
use App\Containers\AppSection\Products\Actions\DeleteProductsAction;
use App\Containers\AppSection\RecentAction\Actions\CreateRecentActionAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createProducts(CreateProductsRequest $request): JsonResponse
    {
        $products = app(CreateProductsAction::class)->run($request);
        $type_action = 'Post';
        $action_label = 'Product';
        app(CreateRecentActionAction::class)->run($products->id, $type_action, $action_label);
        return $this->created($this->transform($products, ProductsTransformer::class));
    }

    public function findProductsById(FindProductsByIdRequest $request): array
    {
        $products = app(FindProductsByIdAction::class)->run($request);
        return $this->transform($products, ProductsTransformer::class);
    }

    public function getAllProducts(GetAllProductsRequest $request): array
    {
        $products = app(GetAllProductsAction::class)->run($request);
        return $this->transform($products, ProductsTransformer::class);
    }

    public function updateProducts(UpdateProductsRequest $request): array
    {
        $products = app(UpdateProductsAction::class)->run($request);
        $type_action = 'Update';
        $action_label = 'Product';
        app(CreateRecentActionAction::class)->run($products->id, $type_action, $action_label);
        return $this->transform($products, ProductsTransformer::class);
    }

    public function deleteProducts(DeleteProductsRequest $request): JsonResponse
    {
        app(DeleteProductsAction::class)->run($request);
        return $this->noContent();
    }
}
