<?php

namespace App\Containers\AppSection\Quote\Tasks;

use App\Containers\AppSection\Quote\Data\Repositories\QuoteRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindQuoteByIdTask extends Task
{
    protected QuoteRepository $repository;

    public function __construct(QuoteRepository $repository)
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
