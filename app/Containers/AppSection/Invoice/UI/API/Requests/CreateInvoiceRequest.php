<?php

namespace App\Containers\AppSection\Invoice\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

class CreateInvoiceRequest extends Request
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
            'invoice_number' => 'required',
            'date' => 'required',
            'due_amount' => 'required',
            'employee_data' => 'required',
            'business_id' => 'required',
            'product_data' => 'required',
            'customer_name' => 'required',
            'customer_phone_number' => 'required',
            'status' => 'required',
            'total' => 'required',
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
