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
            'lastname'=> ['nullable','max:255'],
            'firstname' => ['nullable','max:255'],
            'pseudo' => ['required', 'unique'],
            'email' => ['required','unique'],
            'phone' => ['nullable', 'max:20'],
            'avatar_user' => ['nullable', 'max:255'],
            'email_verified_at' => ['nullable'],
            'password' => ['required'],
        ];
    }
}
