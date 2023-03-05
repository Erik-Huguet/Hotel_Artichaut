<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFooterRequest extends FormRequest
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
            'addressHotel' => ['required', 'max:255'],
            'NomHotel'=> ['required', 'max:255'],
            'logoHotel'=> ['required', 'max:255'],
            'emailHotel'=> ['required', 'max:255'],
            'telephoneHotel'=> ['required', 'max:255'],
            'urlFooter'=> ['required', 'max:255'],
            'fk_Footer_Users' => ['required', 'max:255'],
        ];
    }
}
