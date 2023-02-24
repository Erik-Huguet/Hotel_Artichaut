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
<<<<<<< HEAD
        //var_dump('hello');
=======

>>>>>>> 4873922f43331333606de86c8935ab328dc10b79
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
<<<<<<< HEAD
            'lastname'=> ['nullable','max:255'],
            'firstname' => ['nullable','max:255'],
            'pseudo' => ['required', 'unique'],
            'email' => ['required','unique'],
            'phone' => ['nullable', 'max:20'],
            'avatar_user' => ['nullable', 'max:255'],
            'email_verified_at' => ['nullable'],
            'password' => ['required'],

=======
            'lastname'=> ['required', 'max:255'],
            'firstname' => ['required', 'max:255'],
            'pseudo' => ['required','max:255'],
            'email' => ['required', 'max:255'],
            'phone' => ['required', 'max:20'],
            'avatar_user' => ['required', 'max:255'],
            'password' => ['require', 'max:255'],
            'fk_Users_Roles' => ['required'],
>>>>>>> 4873922f43331333606de86c8935ab328dc10b79
        ];
    }
}
