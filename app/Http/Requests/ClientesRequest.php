<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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

            'nombres'=> 'required',
            'apellidos'=> 'required',
            'dir_casa'=> 'required',
            'dir_trabajo',
            'cel_uno'=> 'required|numeric',
            'cel_dos'=> 'nullable|numeric'

        ];
    }
}
