<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Business\Tasks\UpdateBusinessTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBusinessAction extends Action
{
    public function run(Request $request): Business
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'name',
            'logo',
            'address',
            'phone_number',
            'email',
            'aba_name',
            'acc_number',
            'qr_code',
            'invoice_toptext',
            'invoice_note',
            'digital_sign',
            'facebook_link',
            'instagram_link'
        ]);

        return app(UpdateBusinessTask::class)->run($request->id, $data);
    }
}
