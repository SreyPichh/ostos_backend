<?php

namespace App\Containers\AppSection\NotedBook\Tasks;

use App\Containers\AppSection\NotedBook\Data\Repositories\NotedBookRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateNotedBookTask extends Task
{
    protected NotedBookRepository $repository;

    public function __construct(NotedBookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
