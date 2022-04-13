<?php

namespace App\Containers\AppSection\RecentAction\Tasks;

use App\Containers\AppSection\RecentAction\Data\Repositories\RecentActionRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllRecentActionsTask extends Task
{
    protected RecentActionRepository $repository;

    public function __construct(RecentActionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->orderBy('created_at', 'desc')->paginate();
    }
}
