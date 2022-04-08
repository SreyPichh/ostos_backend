<?php

namespace App\Containers\AppSection\Business\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBusinessTask extends Task
{
    protected BusinessRepository $repository;

    public function __construct(BusinessRepository $repository)
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
