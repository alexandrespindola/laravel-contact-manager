<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'name' => 'required|min:5',
                    'contact' => 'required|digits:9|unique:contacts',
                    'email' => 'required|email|unique:contacts',
                ];
            }
            case 'PUT':
                case 'PATCH':
                {
                    return [
                        'name' => 'min:5',
                        'contact' => ['digits:9', Rule::unique('contacts')->ignore($this->route('contact')->id)],
                        'email' => ['email', Rule::unique('contacts')->ignore($this->route('contact')->id)],
                    ];
                }
            default:break;
        }
    }
}
