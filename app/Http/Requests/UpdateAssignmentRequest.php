<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAssignmentRequest extends FormRequest
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
            'module_id'=>['required'],
            'title'=>['required','string','max:255', Rule::unique('assignments','title')->ignore($this->route('assignments'))],
            'description'=>['nullable'],
            'date_collection'=>['required','date']
        ];
    }
    public function messages()
    {
        return [
            'module_id.required'=>'Modul Belum Di-isi',
            'title.required'=>'Judul Belum Di-isi',
            'title.string'=>'Judul Harus Beformat huruf',
            'title.max'=>'Judul melebihi Batas',
            'title.unique'=>'Judul Sudah Ada',
            'date_collection.required'=>'Tanggal Pengumpulan Belum Di-isi',
            'date_collection.date'=>'Tanggal Pengumpulan Harus Berformat',
        ];
    }
}
