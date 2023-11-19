<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'nama' => 'required|string|min:3|max:255',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'no_hp' => 'required|numeric|min:10',
            'alamat' => 'required',
            'tgl_lahir' => 'required|date',
        ];
    }
}
