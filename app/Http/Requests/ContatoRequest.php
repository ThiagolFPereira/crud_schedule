<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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

        switch($this->method()) {
            case "POST":
                return [
                    "name" => 'required|max:100',
                    "mail" => 'required|max:200|unique:contatos',
                    "address" => 'required',
                    "number" => 'required',
                    "neighborhood" => 'required',
                    "city" => 'required',
                    "state" => 'required',
                    "zip" => 'required',
                    "phone" => 'required|max:15',
                    "avatar" => 'nullable|sometimes|image|mimes:jpg,jpeg,png,git'

                ];
                break;


                case "PUT":
                    return [
                        "name" => 'required|max:100',
                        "mail" => 'mail|required|max:200|unique:contatos,email'.$this->id,
                        "address" => 'required',
                        "number" => 'required',
                        "neighborhood" => 'required',
                        "city" => 'required',
                        "state" => 'required',
                        "zip" => 'required',
                        "phone" => 'required|max:15',
                        "avatar" => 'nullable|sometimes|image|mimes:jpg,jpeg,png,git'

                    ];

                    break;


                    default:break;
        }
    }

    public function messages()
    {
        return [
            "name.required" => 'O campo senha é obrigatório',
            "mail.mail" => 'O campo email é obrigatório',

        ];
    }
}
