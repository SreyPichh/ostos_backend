<?php

namespace App\Containers\AppSection\Receipt\Tasks;

use App\Containers\AppSection\Receipt\Data\Repositories\ReceiptRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateReceiptTask extends Task
{
    protected ReceiptRepository $repository;

    public function __construct(ReceiptRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
