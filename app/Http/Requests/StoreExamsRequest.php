<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamsRequest extends FormRequest
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
            'class_id'=>['required','exists:exams,id'],
            'title'=>['required','string','max:255','unique:exams,title'],
            'date_exam'=>['required','date'],
            'description'=>['nullable']
        ];
    }
    public function messages()
    {
        return[
            'class_id.required'=>'Kelas Belum Di-isi',
            'title.required'=>'Judul Belum Di-isi',
            'title.string'=>'Judul harus berformat Huruf',
            'title.max'=>'Judul Melebihi Batas',
            'title.unique'=>'Judul Sudah ada',
            'date_exam.required'=>'Tanggal Ujian Belum Di-isi',
            'date_exam.date'=>'Tanggal Ujian Harus Berformat Tanggal',
        ];
    }
}
