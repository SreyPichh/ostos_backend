<?php

namespace App\Containers\AppSection\Receipt\Tasks;

use App\Containers\AppSection\Receipt\Data\Repositories\ReceiptRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindReceiptByIdTask extends Task
{
    protected ReceiptRepository $repository;

    public function __construct(ReceiptRepository $repository)
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
