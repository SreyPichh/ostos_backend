<?php

namespace App\Containers\AppSection\Business\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

class CreateBusinessRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            // 'id' => 'required'
//            'name' => 'required',
//            'logo' => 'required',
//            'address' => 'required',
//            'phone_number1' => 'required',
//            'telegram' => 'required',
//            'aba_name' => 'required',
//            'acc_number' => 'required',
//            'qr_code' => 'required',
//            'invoice_toptext' => 'required',
//            'invoice_note' => 'required',
//            'digital_sign' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
