<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // السماح لأي شخص بالوصول للفورم
    }

    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed'
        ];
    }

}
