<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'addressHotel' => ['nullable'],
            'NomHotel'=> ['nullable'],
            'logoHotel'=> ['nullable'],
            'emailHotel'=> ['nullable'],
            'telephoneHotel'=> ['nullable'],
            'urlFooter'=> ['nullable'],
            'fk_Footer_Users' => ['nullable'],
        ];
    }
}
