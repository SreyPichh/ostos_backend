<?php

namespace App\Containers\AppSection\NotedBook\Tasks;

use App\Containers\AppSection\NotedBook\Data\Repositories\NotedBookRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateNotedBookTask extends Task
{
    protected NotedBookRepository $repository;

    public function __construct(NotedBookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
