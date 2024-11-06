<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassesRequest extends FormRequest
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
            'name'=>['required','string','max:255'],
            'descripton'=>['nullable'],
            'teacher_id'=>['required']
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Nama Belum Di-isi',
            'name.string'=>'Nama Harus Berformat huruf',
            'name.max'=>'Nama Melebihi Batas',
            'teacher_id.required'=>'Guru Belum Di-pilih'
        ];
    }
}
