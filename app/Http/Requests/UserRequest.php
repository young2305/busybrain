<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
                        'nom'               => ['required','min:2','max:60'],
                        'prenom'            => ['required','min:2','max:90'],
                        'email'             => ['required','email','unique:users,email'],
                        'pays'              => ['required','string'],               
                        'ville'             => ['required','min:2','max:30'],
                        'numero'            => ['required','integer'],
                        'usser'             => ['required','min:3','max:12','unique:users,usser'],
                        'password'          => ['required','confirmed','min:4','max:16'],
                        'token'             => ['required','string'],
                        'password_confirmation' => ['required','min:4','max:16'],
        ];
    }
}
