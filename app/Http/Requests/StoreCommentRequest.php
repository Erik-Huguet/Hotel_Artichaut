<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'title_fr_comment' => ['required','max:50'],
            'describe_fr_comment' => ['required', 'max:300'],
            'title_ang_comment' => ['required','max:50'],
            'describe_ang_comment' => ['required', 'max:300'],
            'rating' => ['required'],
            'fk_Users_Comments' => ['required'],
            'fk_Chambers_Comments' => ['required']
        ];
    }
}
