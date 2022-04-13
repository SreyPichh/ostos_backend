<?php

namespace App\Containers\AppSection\RecentAction\Tasks;

use App\Containers\AppSection\RecentAction\Data\Repositories\RecentActionRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateRecentActionTask extends Task
{
    protected RecentActionRepository $repository;

    public function __construct(RecentActionRepository $repository)
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
