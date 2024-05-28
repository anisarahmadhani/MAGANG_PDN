<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputMapelRequest extends FormRequest
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
            'nama_pelajaran' => 'required',
            'nama_dosen' => 'required',
            'kelas' => 'required',
            'jam' => 'required',
            'modul' => 'required|mimes:pdf'
        ];
    }

    public function messages()
    {
        return [
            'nama_pelajaran.required' => 'Data harus diisikan',
            'nama_dosen.required' => 'Data harus diisikan',
            'kelas.required' => 'Data harus diisikan',
            'jam.required' => 'Data harus diisikan',
            'modul.mims' => 'Pastikan format file benar'
        ];
    }
}
