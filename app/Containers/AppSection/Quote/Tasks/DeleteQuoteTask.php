<?php

namespace App\Containers\AppSection\Quote\Tasks;

use App\Containers\AppSection\Quote\Data\Repositories\QuoteRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteQuoteTask extends Task
{
    protected QuoteRepository $repository;

    public function __construct(QuoteRepository $repository)
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
