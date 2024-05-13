<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required | min:4 | max:20",
            "email"=> "required | email",
            "password"=> "required"
        ];
    }
    public function messages(): array
    {
        return [
            "name.required"=> "Name required!",
            "email.required"=> "Email required!",
            "email.email"=> "Email invalid!",
            "name.min"=>"enter at least 4 characters!",
            "name.max"=>"enter at least 20 characters!"     
        ];
    }
}
