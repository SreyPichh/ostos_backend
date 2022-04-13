<?php

namespace App\Containers\AppSection\RecentAction\Tasks;

use App\Containers\AppSection\RecentAction\Data\Repositories\RecentActionRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindRecentActionByIdTask extends Task
{
    protected RecentActionRepository $repository;

    public function __construct(RecentActionRepository $repository)
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
