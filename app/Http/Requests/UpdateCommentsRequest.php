<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentsRequest extends FormRequest
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
            'teacher_id'=>['required','exists:teachers,id'],
            'assignment_id'=>['required','exists:assignments,id'],
            'exam_id'=>['required','exists:exams,id'],
            'content'=>['required',]
        ];
    }
    public function messages()
    {
        return[
            'user_id.required'=>'User Belum Di-pilih',
            'assignment_id.required'=>'Tugas Belum Di-pilih',
            'exam_id.required'=>'Ujian Belum Di-pilih',
            'content.required'=>'Konten Komen Belum Di-isi'
        ];
    }
}
