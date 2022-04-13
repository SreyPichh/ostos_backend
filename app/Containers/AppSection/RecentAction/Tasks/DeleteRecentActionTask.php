<?php

namespace App\Containers\AppSection\RecentAction\Tasks;

use App\Containers\AppSection\RecentAction\Data\Repositories\RecentActionRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteRecentActionTask extends Task
{
    protected RecentActionRepository $repository;

    public function __construct(RecentActionRepository $repository)
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
