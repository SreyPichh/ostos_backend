<?php

namespace App\Containers\AppSection\Business\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBusinessTask extends Task
{
    protected BusinessRepository $repository;

    public function __construct(BusinessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
//        dd($data);
        try {
            return $this->repository->create($data);
//            dd('.....');
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
