<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeacherRequest extends FormRequest
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
            'name_teacher'=>['required','string','max:255',Rule::unique('teachers','name_teacher')->ignore($this->route('teachers'))],
            'NIP'=>['required','numeric','max:18',Rule::unique('teachers','NIP')->ignore($this->route('teachers'))],
            'email.teacher'=>['required','email','max:255'],
            'number_teacher'=>['required','numeric','max:13',Rule::unique('teachers','number_teacher')->ignore($this->route('teachers'))]
        ];
    }
}
