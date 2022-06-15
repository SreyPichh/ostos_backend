<?php

namespace App\Containers\AppSection\Employee\Actions;

use App\Containers\AppSection\Employee\Models\Employee;
use App\Containers\AppSection\Employee\Tasks\CreateEmployeeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEmployeeAction extends Action
{
    public function run(Request $request): Employee
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'name' => $request->name,
            'gender' => $request->gender,
            'first_address' => $request->first_address,
            'second_address' => $request->second_address,
            'phone_number' => $request->phone_number,
            'national_id' => $request->national_id,
            'profile_img' => $request->profile_img,
            'birth' => $request->birth,
        ]);

        return app(CreateEmployeeTask::class)->run($data);
    }
}
