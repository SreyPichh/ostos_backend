<?php

namespace App\Containers\AppSection\Receipt\Tasks;

use App\Containers\AppSection\Receipt\Data\Repositories\ReceiptRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteReceiptTask extends Task
{
    protected ReceiptRepository $repository;

    public function __construct(ReceiptRepository $repository)
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
