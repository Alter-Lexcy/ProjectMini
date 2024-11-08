<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateModulRequest extends FormRequest
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
            'class_id'=>['required','exists:classes,id'],
            'title'=>['required','string','max:255',Rule::unique('modules','title')->ignore($this->route('modules'))],
            'description'=>['nullable']
        ];
    }

    public function messages()
    {
        return[
            'class_id.required'=>'Kelas Belum Di-isi',
            'title.required'=>'Judul Belum Di-isi',
            'title.string'=>'Judul Harus Berformat Huruf',
            'title.max'=>'Judul Melebihi Batas',
            'title.unique'=>'Judul Sudah Ada',
        ];
    }
}
