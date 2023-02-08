<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'lastname'=> 'required|max:255',
            'firstname' => 'required|max:255',
            'pseudo' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:20',
            'avatar_user' => 'required|max:255',
            'email_verified_at' => 'nullable',
            'password' => 'required|max:255',
            'fk_Users_Roles' => 'required',
        ];
    }
}
