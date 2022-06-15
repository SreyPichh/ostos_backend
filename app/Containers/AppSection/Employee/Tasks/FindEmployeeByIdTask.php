<?php

namespace App\Containers\AppSection\Employee\Tasks;

use App\Containers\AppSection\Employee\Data\Repositories\EmployeeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindEmployeeByIdTask extends Task
{
    protected EmployeeRepository $repository;

    public function __construct(EmployeeRepository $repository)
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
