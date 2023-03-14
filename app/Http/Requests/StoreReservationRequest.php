<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
    //Enregistrement de la base de donnée (verification du formulaire)
    public function rules()
    {
        return [
            'dateStart' => ['required'],
            'dateEnd' => [ 'required'],
            'nb_Person'  => ['required', 'min:1'],
            'nb_Chamber' => ['required', 'min:1'],
            'nb_TotalServices' => ['nullable'],
        ];
    }
}
