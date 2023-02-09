<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvantageRequest extends FormRequest
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
            'discribe_fr_adv' => ['required'],
            'title_ang_adv' => ['required','max:50'],
            'discribe_ang_adv' => ['required'],
            'icon_adv' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ];
    }
}
