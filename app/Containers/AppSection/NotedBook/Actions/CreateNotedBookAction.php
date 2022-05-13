<?php

namespace App\Containers\AppSection\NotedBook\Actions;

use App\Containers\AppSection\NotedBook\Models\NotedBook;
use App\Containers\AppSection\NotedBook\Tasks\CreateNotedBookTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateNotedBookAction extends Action
{
    public function run(Request $request): NotedBook
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'description' => $request->description
        ]);

        return app(CreateNotedBookTask::class)->run($data);
    }
}
