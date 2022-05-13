<?php

namespace App\Containers\AppSection\NotedBook\Tasks;

use App\Containers\AppSection\NotedBook\Data\Repositories\NotedBookRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteNotedBookTask extends Task
{
    protected NotedBookRepository $repository;

    public function __construct(NotedBookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
