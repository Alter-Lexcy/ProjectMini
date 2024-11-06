<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Nama Belum Di-isi',
            'name.string'=>'Nama harus Berformat Huruf',
            'name.max'=>'Nama Melewati Terlalu Panjang',
            'email.required'=>'Email Belum Di-isi',
            'email.string'=>'Email Berformat Huruf',
            'email.email'=>'Email Harus berformat Email',
            'email.lowercase'=>'Email Harus Berhuruf kecil',
            'email.max'=>'Nama Email Melewati Batas',
            'email.unique'=>'Email Sudah Ada'
        ];
    }
}
