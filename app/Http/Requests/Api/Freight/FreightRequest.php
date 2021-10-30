<?php

namespace App\Http\Requests\Api\Freight;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FreightRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'plate' => ['required', 'string', 'max:7'],
            'vehicle_owner' => ['required', 'string', 'max:255'],
            'cost_of_freight' => ['required', 'numeric'],
            'start_date' => 'required',//|date|after:yesterd',
            'end_date' => 'required',//|date|after:today',
            'status'=> ['required', 'string', Rule::in(['started', 'in_transit', 'concluded'])]
        ];

    }

    public function authorize(): bool
    {
        return true;
    }

}
