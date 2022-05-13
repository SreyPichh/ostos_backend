<?php

namespace App\Containers\AppSection\NotedBook\UI\API\Controllers;

use App\Containers\AppSection\NotedBook\UI\API\Requests\CreateNotedBookRequest;
use App\Containers\AppSection\NotedBook\UI\API\Requests\DeleteNotedBookRequest;
use App\Containers\AppSection\NotedBook\UI\API\Requests\GetAllNotedBooksRequest;
use App\Containers\AppSection\NotedBook\UI\API\Requests\FindNotedBookByIdRequest;
use App\Containers\AppSection\NotedBook\UI\API\Requests\UpdateNotedBookRequest;
use App\Containers\AppSection\NotedBook\UI\API\Transformers\NotedBookTransformer;
use App\Containers\AppSection\NotedBook\Actions\CreateNotedBookAction;
use App\Containers\AppSection\NotedBook\Actions\FindNotedBookByIdAction;
use App\Containers\AppSection\NotedBook\Actions\GetAllNotedBooksAction;
use App\Containers\AppSection\NotedBook\Actions\UpdateNotedBookAction;
use App\Containers\AppSection\NotedBook\Actions\DeleteNotedBookAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createNotedBook(CreateNotedBookRequest $request): JsonResponse
    {
        $notedbook = app(CreateNotedBookAction::class)->run($request);
        return $this->created($this->transform($notedbook, NotedBookTransformer::class));
    }

    public function findNotedBookById(FindNotedBookByIdRequest $request): array
    {
        $notedbook = app(FindNotedBookByIdAction::class)->run($request);
        return $this->transform($notedbook, NotedBookTransformer::class);
    }

    public function getAllNotedBooks(GetAllNotedBooksRequest $request): array
    {
        $notedbooks = app(GetAllNotedBooksAction::class)->run($request);
        return $this->transform($notedbooks, NotedBookTransformer::class);
    }

    public function updateNotedBook(UpdateNotedBookRequest $request): array
    {
        $notedbook = app(UpdateNotedBookAction::class)->run($request);
        return $this->transform($notedbook, NotedBookTransformer::class);
    }

    public function deleteNotedBook(DeleteNotedBookRequest $request): JsonResponse
    {
        app(DeleteNotedBookAction::class)->run($request);
        return $this->noContent();
    }
}
