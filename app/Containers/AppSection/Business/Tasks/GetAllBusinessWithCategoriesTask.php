<?php

namespace App\Containers\AppSection\Business\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBusinessWithCategoriesTask extends Task
{
    protected BusinessRepository $repository;

    public function __construct(BusinessRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
//        $test=$this->repository->with('category:id,name')->get();
//        dd($test->category);
//        foreach (categories as $category) {
//            $category->name;
//        }
//        dd($this->repository);
        return $this->repository->with('category:id,name')->get();
    }
}
