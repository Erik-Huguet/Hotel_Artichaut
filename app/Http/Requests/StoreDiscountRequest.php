<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'title_fr_discount' => ['required', 'max:50'],
            'title_ang_discount' => ['required', 'max:50'],
            'describe_fr_discount' => ['required', 'max:300'],
            'describe_ang_discount' => ['required', 'max:300'],
            'code_discount' => ['required', 'max:255'],
            'fk_Users_Discounts' => ['required']
        ];
    }
}
