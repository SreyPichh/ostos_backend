<?php

namespace App\Containers\AppSection\Business\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBusinessByIdTask extends Task
{
    protected BusinessRepository $repository;

    public function __construct(BusinessRepository $repository)
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
