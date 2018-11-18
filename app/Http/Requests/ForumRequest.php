<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForumRequest extends FormRequest
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
            'judul' => 'required',
            'deskripsi' => 'required'
        ];
    }

    public function messages() {
        return [
            'judul.required' => 'Judul forum tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi forum tidak boleh kosong'
        ];
    }
}
