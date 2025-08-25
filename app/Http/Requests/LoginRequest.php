<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'password'=>'required|string|',
            'email'=>'bail|required|string|email'
        ];
    }
}
