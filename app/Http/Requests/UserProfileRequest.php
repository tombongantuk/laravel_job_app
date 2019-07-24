<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'no_ktp'=>'required',
            'alamat'=>'required',
            'pendidikan'=>'required',
            'skill'=>'required',
            'no_hp'=>'required',
            'file'=>'required|mimes:pdf'
        ];
    }
    public function messages()
    {
        return [
            'no_ktp.required'=>'isi sesuai nik pada ktp anda',
            'alamat.required'=>'isi sesuai pada ktp anda',
            'pendidikan.required'=>'cantumkan pendidikan anda',
            'skill.required'=>'isi skill anda untuk menarik perhatian reqruiter',
            'no_hp.required'=>'isi no hp anda yang aktif dan bisa dihubungi',
            'file.required'=>'file anda harus berformat pdf'
        ];
    }
}
