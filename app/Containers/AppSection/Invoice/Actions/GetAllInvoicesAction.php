<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Invoice\Tasks\GetAllInvoicesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllInvoicesAction extends Action
{
    public function run(Request $request)

    {
        if($request->search == 'customer_id:null')
        {
            return Invoice::where('customer_id', null )->orderBy('updated_at', 'desc')->paginate();
        }
        if($request->search == 'customer_id:nullwithstatus:Unpaid'){
            return Invoice::where(['customer_id' => null, 'status' => 'Unpaid'])->paginate();
        }
        if($request->search == 'customer_id:nullwithstatus:Paid')
        {
            return Invoice::where(['customer_id' => null, 'status' => 'Paid'])->paginate();
        }
        return app(GetAllInvoicesTask::class)->addRequestCriteria()->run();
    }
}
