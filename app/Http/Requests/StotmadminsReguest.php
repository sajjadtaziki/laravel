<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StotmadminsReguest extends FormRequest
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
            'Name'=>['required','min:3','max:40'],
            // required یعنی اگر ریکویسی به این خورد حتما باید داخل پر باشد
            'Family'=>['required','min:3','max:40'],
            'national code'=>['required','min:10','max:10'],
            'phone'=>['required','min:11','max:14'],
            'emile'=>['required','min:3','max:40'],
        ];
    }
}
