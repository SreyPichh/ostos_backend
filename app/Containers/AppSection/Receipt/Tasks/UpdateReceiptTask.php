<?php

namespace App\Containers\AppSection\Receipt\Tasks;

use App\Containers\AppSection\Receipt\Data\Repositories\ReceiptRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateReceiptTask extends Task
{
    protected ReceiptRepository $repository;

    public function __construct(ReceiptRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
