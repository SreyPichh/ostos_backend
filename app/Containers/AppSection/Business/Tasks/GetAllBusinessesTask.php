<?php

namespace App\Containers\AppSection\Business\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBusinessesTask extends Task
{
    protected BusinessRepository $repository;

    public function __construct(BusinessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
