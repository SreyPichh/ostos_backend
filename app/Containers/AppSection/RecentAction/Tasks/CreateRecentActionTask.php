<?php

namespace App\Containers\AppSection\RecentAction\Tasks;

use App\Containers\AppSection\RecentAction\Data\Repositories\RecentActionRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateRecentActionTask extends Task
{
    protected RecentActionRepository $repository;

    public function __construct(RecentActionRepository $repository)
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
