<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvantageRequest extends FormRequest
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
            'title_fr_adv' => ['required', 'max:50'],
            'describe_fr_adv' => ['required', 'max:300'],
            'title_ang_adv' => ['required','max:50'],
            'describe_ang_adv' => ['required', 'max:300'],
            'icon_adv' => ['required', 'url', 'max:2048'],
            'position_icon_adv' => ['required'],
            'fk_Users_advantages' => ['required']
        ];
    }
}
