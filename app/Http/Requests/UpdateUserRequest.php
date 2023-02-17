<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        //var_dump('hello');
       // if (!Gate::allows('update-user'))
       // {
        //   return false;
        //}
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
            'lastname'=> ['sometime','max:255'],
            'firstname' => ['sometime','max:255'],
            'pseudo' => ['required', 'unique'],
            'email' => ['required','unique'],
            'phone' => ['sometime', 'max:20'],
            'avatar_user' => ['sometime', 'max:255'],
            'email_verified_at' => ['nullable'],
            'password' => ['required'],
        ];
    }
}
