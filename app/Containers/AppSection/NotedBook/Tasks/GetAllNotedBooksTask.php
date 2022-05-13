<?php

namespace App\Containers\AppSection\NotedBook\Tasks;

use App\Containers\AppSection\NotedBook\Data\Repositories\NotedBookRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllNotedBooksTask extends Task
{
    protected NotedBookRepository $repository;

    public function __construct(NotedBookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
