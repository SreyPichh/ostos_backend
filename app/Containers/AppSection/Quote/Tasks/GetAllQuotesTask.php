<?php

namespace App\Containers\AppSection\Quote\Tasks;

use App\Containers\AppSection\Quote\Data\Repositories\QuoteRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllQuotesTask extends Task
{
    protected QuoteRepository $repository;

    public function __construct(QuoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
