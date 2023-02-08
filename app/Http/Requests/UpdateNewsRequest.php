<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_fr_new' => 'required|max:50',
            'describe_fr_new' => 'required',
            'title_ang_new' => 'required|max:50',
            'describe_ang_new' => 'required',
            'icon_new' => 'required',
            'position_icon' => 'required'
        ];
    }
}
