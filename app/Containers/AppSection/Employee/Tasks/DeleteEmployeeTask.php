<?php

namespace App\Containers\AppSection\Employee\Tasks;

use App\Containers\AppSection\Employee\Data\Repositories\EmployeeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteEmployeeTask extends Task
{
    protected EmployeeRepository $repository;

    public function __construct(EmployeeRepository $repository)
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
