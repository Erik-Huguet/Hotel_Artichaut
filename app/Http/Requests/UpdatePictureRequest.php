<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePictureRequest extends FormRequest
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
            'url_picture' => ['required', 'url'],
            'fk_Pictures_Advantages' => ['required'],
            'fk_Pictures_Chambers' => ['required'],
            'fk_Pictures_Discounts' => ['required'],
            'fk_Pictures_News' => ['required'],

        ];
    }
}
