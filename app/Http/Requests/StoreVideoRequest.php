<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
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
            'title_fe_video' => 'require|max:255',
            'describe_fr_video' => 'require|max:255',
            'title_ang_video' => 'require|max:255',
            'describe_ang_video' => 'require|max:255',
            'url_video' => 'require|max:255',
            'fk_Users_Videos' => 'required',
        ];
    }
}
