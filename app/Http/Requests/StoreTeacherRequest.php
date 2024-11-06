<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'name_teacher'=>['required','unique:teachers,name_teacher','string','max:255'],
            'NIP'=>['required','numeric','max:18','unique:teachers,NIP'],
            'email_teacher'=>['required','email','max:255','unique:teacher,email'],
            'number_teacher'=>['required','numeric','max:13','unique:teachers,number_teacher']
        ];
    }
    public function messages()
    {
        return[
            'name_teacher.required'=>'Nama Guru Belum Di-isi',
            'name_teacher.string'=>'Nama Guru Harus Berformat Huruf',
            'name_teacher.max'=>'Nama Guru Melebihi Batas',
            'name_teacher.unique'=>'Nama Guru Sudah Ada',
            'NIP.required'=>'NIP Belum Di-isi',
            'NIP.numeric'=>'NIP Harus Berformat Angka',
            'NIP.max'=>'NIP Melebihi Batas',
            'NIP.unique'=>'NIP Sudah Ada',
            'email_teacher.required'=>'Email Belum Di-isi',
            'email_teacher.max'=>'Email Melebihi Batas',
            'email_teacher.email'=>'Email Berformat Emial',
            'email_teacher.unique'=>'Email Sudah ada',
            'number_teacher.required'=>'Nomer Guru Belum Di-isi',
            'number_teacher.numeric'=>'Nomer Guru Harus Berformat Angka',
            'number_teacher.max'=>'Nomer Guru Melebihi Batas',
            'number_teacher.unique'=>'Nomer Guru Sudah Ada',
        ];
    }
}
