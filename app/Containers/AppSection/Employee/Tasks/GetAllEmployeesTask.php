<?php

namespace App\Containers\AppSection\Employee\Tasks;

use App\Containers\AppSection\Employee\Data\Repositories\EmployeeRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllEmployeesTask extends Task
{
    protected EmployeeRepository $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
