<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KatalogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'nama' => 'required',
                'jurusan' => 'required',
                'jabatan' => 'required',
                'tempatlahir' => 'required',
                'tanggallahir' => 'required',
                'nomorhp' => 'required',
                'idline' => 'required',
            //Melakukan validasi
        ];
    }

    public function messages()
    {
        return [
            'nama' => 'Nama harus diisi',
        ];
    }
}
