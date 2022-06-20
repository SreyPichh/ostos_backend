<?php

namespace App\Containers\AppSection\Quote\Tasks;

use App\Containers\AppSection\Quote\Data\Repositories\QuoteRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateQuoteTask extends Task
{
    protected QuoteRepository $repository;

    public function __construct(QuoteRepository $repository)
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
