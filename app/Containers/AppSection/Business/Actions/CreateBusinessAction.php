<?php

namespace App\Containers\AppSection\Business\Actions;

use App\Containers\AppSection\Business\Models\Business;
use App\Containers\AppSection\Business\Tasks\CreateBusinessTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Auth;

class CreateBusinessAction extends Action
{
    public function run(Request $request): Business
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'employee_id' => Auth::user()->id,
            'name' => $request->name,
            'logo' => $request->logo,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'aba_name' => $request->aba_name,
            'acc_number' => $request->acc_number,
            'qr_code' => $request->qr_code,
            'invoice_toptext' =>$request->invoice_toptext,
            'invoice_note' => $request->invoice_note,
            'digital_sign' => $request->digital_sign,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link
        ]);

        return app(CreateBusinessTask::class)->run($data);
    }
}
