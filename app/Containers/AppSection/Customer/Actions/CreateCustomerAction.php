<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Tasks\CreateCustomerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCustomerAction extends Action
{
    public function run(Request $request): Customer
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone_number' => $request->customer_phone_number,
            'customer_phone_number_2' => $request->customer_phone_number_2,
            'customer_address1' => $request->customer_address1,
            'customer_address2' => $request->customer_address2
        ]);

        return app(CreateCustomerTask::class)->run($data);
    }
}
