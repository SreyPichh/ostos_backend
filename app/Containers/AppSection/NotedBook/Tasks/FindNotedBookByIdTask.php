<?php

namespace App\Containers\AppSection\NotedBook\Tasks;

use App\Containers\AppSection\NotedBook\Data\Repositories\NotedBookRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindNotedBookByIdTask extends Task
{
    protected NotedBookRepository $repository;

    public function __construct(NotedBookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
