<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            "name" => ['required' , 'string'],
            "description" => ['required' , 'string'],
            "address" => ['required' , 'string'],
            "phone" => ['required' , 'string'],
            "email" => ['required' ,'email'],
            "logo" => ['required','mimes:jpg,jpeg,png,gif,webp'],
            "facebook" => ['url'],
            "twitter" => ['url'],
            "instagram" => ['url'],
            "youtube" => ['url'],
            
        ];
    }
}
