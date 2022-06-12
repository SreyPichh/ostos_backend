<?php

namespace App\Containers\AppSection\NotedBook\Actions;

use App\Containers\AppSection\NotedBook\Models\NotedBook;
use App\Containers\AppSection\NotedBook\Tasks\UpdateNotedBookTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateNotedBookAction extends Action
{
    public function run(Request $request): NotedBook
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'title' => $request->title,
            'description' => $request->description
        ]);

        return app(UpdateNotedBookTask::class)->run($request->id, $data);
    }
}
