<?php

namespace App\Containers\AppSection\RecentAction\Actions;

use App\Containers\AppSection\RecentAction\Models\RecentAction;
use App\Containers\AppSection\RecentAction\Tasks\CreateRecentActionTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateRecentActionAction extends Action
{
    public function run($id, $type_action,$action_label): RecentAction
    {

        $data = [
            'action_id'=>$id,
            'type_action'=>$type_action,
            'action_label' => $action_label
        ];
        return app(CreateRecentActionTask::class)->run($data);
    }
}
