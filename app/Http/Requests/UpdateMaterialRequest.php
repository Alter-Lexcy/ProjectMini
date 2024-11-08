<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMaterialRequest extends FormRequest
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
            'module_id'=>['required','exists:modules,id'],
            'title'=>['required','string','max:255',Rule::unique('materials','title')->ignore($this->route('materials'))],
            'content'=>['nullable'],
            'photo'=>['required','image','size:2048']
        ];
    }

    public function messages()
    {
        return [
            'module_id.required'=>'Modul Belum Di-isi',
            'title.required'=>'Judul Belum Di-isi',
            'title.string'=>'Judul Harus Berformat Huruf',
            'title.max'=>'Judul Melebihi Batas',
            'title.unique'=>'Judul Sudah Ada',
            'photo.required'=>'Foto Belum Di-isi',
            'photo.image'=>'Foto Berformat Gambar',
            'photo.size'=>'Foto Melebihi Batas',
        ];
    }
}
